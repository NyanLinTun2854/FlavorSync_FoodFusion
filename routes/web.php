<?php

use App\Http\Controllers\RecipeApprovalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CommunityFollowerController;
use App\Http\Controllers\CommunityLikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

Route::post("/register", [AuthController::class, "register"])->name("register");
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

Route::get('/', function () {
    $recipes = Recipe::with(['category', 'difficultyLevel', 'dietaryPreferences'])->latest()->take(3)->get();
    return view('welcome', ['recipes' => $recipes]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('recipes')->name('recipes.')->group(function () {

    Route::get('/', [RecipeController::class, 'index'])->name('index');

    Route::get('/create', [RecipeController::class, 'create'])->name('create');

    Route::post('/store', [RecipeController::class, 'store'])->name('store');

    Route::get('/{id}', [RecipeController::class, 'show'])->name('show');


});

Route::prefix('community')->name('community.')->group(function () {

    Route::get('/', [CommunityController::class, 'index'])->name('index');

    Route::get('/create', [CommunityController::class, 'create'])->name('create');

    Route::post('/store', [CommunityController::class, 'store'])->name('store');

    Route::get('/{id}', [CommunityController::class, 'show'])->name('show');

    Route::post('/follow/{user}', [CommunityController::class, 'followUnfollow'])->name('follow');

    Route::post('/like/{post}', [CommunityController::class, 'like'])->name('like');

    Route::post('/{post}/comment', [CommunityController::class, 'comment'])->name('comment');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/store', [ContactController::class, 'store'])->name('store');
});

Route::get("/resources", function () {
    return view('culinary-resources');
})->name("resources");

Route::get("/education", function () {
    return view("educational-resources");
})->name("education");


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/recipes', [RecipeApprovalController::class, 'index'])->name('admin.recipes.index');
    Route::patch('/recipes/{id}/approve', [RecipeApprovalController::class, 'approve'])->name('admin.recipes.approve');
    Route::post('/recipes/{id}/reject', [RecipeApprovalController::class, 'reject'])->name('admin.recipes.reject');

    Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages.index');
});