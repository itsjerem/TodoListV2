<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Route pour la page d'accueil
Route::get('/', function () {
    $categories = \App\Models\Category::with('tasks')->get();
    return view('welcome', compact('categories'));
})->name('home');

// Routes pour le formulaire d'inscription, le formulaire de connexion et la déconnexion avec leur traitement   
Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Routes pour le contrôleur de ressources TaskController
// Cela crée les routes pour les actions index, create, store, show, edit, update et destroy (CRUD) avec la methode resource de Laravel
Route::resource('tasks', TaskController::class);

// Routes pour le contrôleur de ressources CategoryController
Route::resource('categories', CategoryController::class);
