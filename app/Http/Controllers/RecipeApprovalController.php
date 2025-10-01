<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeApprovalController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('user')->latest()->get();
        return view('admin.recipes.index', ['recipes' => $recipes]);
    }

    public function approve($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->update(['is_approved' => '1']);

        return redirect()->back()->with('toast', [
            'title' => 'Recipe approved successfully!',
            'type' => 'success',
        ]);
    }

    public function reject($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->update(['is_approved' => '0']);

        return redirect()->back()->with('toast', [
            'title' => 'Recipe rejected successfully!',
            'type' => 'success',
        ]);
    }
}
