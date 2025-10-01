<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        if ($admin->isLocked()) {
            return response()->json([
                'success' => false,
                'message' => 'Account is locked. Please try again later.'
            ], 423);
        }

        if (!$admin->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'Account is deactivated'
            ], 401);
        }

        if (!Hash::check($request->password, $admin->password)) {
            $admin->increment('failed_login_attempts');

            if ($admin->failed_login_attempts >= 3) {
                $admin->update(['locked_until' => now()->addMinutes(3)]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        $admin->update([
            'failed_login_attempts' => 0,
            'locked_until' => null
        ]);

        Auth::guard('admin')->login($admin);

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'redirect' => route('admin.dashboard')
        ]);
    }

    public function dashboard()
    {
        // Dummy data for dashboard
        $stats = [
            'pending_recipes' => 12,
            'total_recipes' => 156,
            'total_users' => 1247,
            'approved_today' => 8
        ];

        $pendingRecipes = [
            (object) [
                'id' => 1,
                'title' => 'Grandma\'s Secret Chocolate Cake',
                'user' => (object) ['first_name' => 'Sarah', 'last_name' => 'Johnson'],
                'created_at' => '2024-01-15 10:30:00',
                'category' => 'Desserts',
                'difficulty' => 'Medium'
            ],
            (object) [
                'id' => 2,
                'title' => 'Spicy Thai Green Curry',
                'user' => (object) ['first_name' => 'Mike', 'last_name' => 'Chen'],
                'created_at' => '2024-01-15 09:15:00',
                'category' => 'Thai',
                'difficulty' => 'Hard'
            ],
            (object) [
                'id' => 3,
                'title' => 'Mediterranean Quinoa Salad',
                'user' => (object) ['first_name' => 'Emma', 'last_name' => 'Rodriguez'],
                'created_at' => '2024-01-15 08:45:00',
                'category' => 'Mediterranean',
                'difficulty' => 'Easy'
            ]
        ];

        return view('admin.dashboard', compact('stats', 'pendingRecipes'));
    }

    public function recipes(Request $request)
    {
        $status = $request->get('status', 'pending');

        // Dummy data for recipes management
        $recipes = collect([
            (object) [
                'id' => 1,
                'title' => 'Grandma\'s Secret Chocolate Cake',
                'user' => (object) ['first_name' => 'Sarah', 'last_name' => 'Johnson'],
                'created_at' => '2024-01-15 10:30:00',
                'category' => 'Desserts',
                'difficulty' => 'Medium',
                'status' => 'pending',
                'ingredients' => 'Dark chocolate, flour, eggs, sugar, butter',
                'prep_time' => 30,
                'cook_time' => 45
            ],
            (object) [
                'id' => 2,
                'title' => 'Spicy Thai Green Curry',
                'user' => (object) ['first_name' => 'Mike', 'last_name' => 'Chen'],
                'created_at' => '2024-01-15 09:15:00',
                'category' => 'Thai',
                'difficulty' => 'Hard',
                'status' => 'pending',
                'ingredients' => 'Green curry paste, coconut milk, chicken, vegetables',
                'prep_time' => 20,
                'cook_time' => 25
            ],
            (object) [
                'id' => 3,
                'title' => 'Classic Margherita Pizza',
                'user' => (object) ['first_name' => 'Luigi', 'last_name' => 'Rossi'],
                'created_at' => '2024-01-14 16:20:00',
                'category' => 'Italian',
                'difficulty' => 'Medium',
                'status' => 'approved',
                'ingredients' => 'Pizza dough, tomato sauce, mozzarella, basil',
                'prep_time' => 15,
                'cook_time' => 12
            ],
            (object) [
                'id' => 4,
                'title' => 'Burnt Toast Surprise',
                'user' => (object) ['first_name' => 'John', 'last_name' => 'Doe'],
                'created_at' => '2024-01-14 14:10:00',
                'category' => 'Breakfast',
                'difficulty' => 'Easy',
                'status' => 'rejected',
                'ingredients' => 'Bread, butter',
                'prep_time' => 2,
                'cook_time' => 5,
                'admin_notes' => 'Recipe lacks proper instructions and nutritional value.'
            ]
        ]);

        if ($status !== 'all') {
            $recipes = $recipes->where('status', $status);
        }

        return view('admin.recipes', compact('recipes', 'status'));
    }

    public function approveRecipe(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'admin_notes' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // In real implementation, update the recipe
        // Recipe::where('id', $id)->update([
        //     'status' => 'approved',
        //     'approved_by' => Auth::guard('admin')->id(),
        //     'approved_at' => now(),
        //     'admin_notes' => $request->admin_notes
        // ]);

        return response()->json([
            'success' => true,
            'message' => 'Recipe approved successfully'
        ]);
    }

    public function rejectRecipe(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'admin_notes' => 'required|string|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // In real implementation, update the recipe
        // Recipe::where('id', $id)->update([
        //     'status' => 'rejected',
        //     'approved_by' => Auth::guard('admin')->id(),
        //     'approved_at' => now(),
        //     'admin_notes' => $request->admin_notes
        // ]);

        return response()->json([
            'success' => true,
            'message' => 'Recipe rejected successfully'
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}

