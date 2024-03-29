<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [IndexController::class, 'mainShow']);
Route::get('/top', [IndexController::class, 'top']);
Route::get('/pravila', [IndexController::class, 'pravila']);
Route::get('/order', [IndexController::class, 'order']);
Route::get('/zakladki', [IndexController::class, 'zakladki']);
Route::get('/Catalog', [IndexController::class, 'Catalog']);
Route::get('/comic_page', [IndexController::class, 'comic_page']);
Route::get('/team_page', [IndexController::class, 'team_page']);
Route::get('/Notification', [IndexController::class, 'Notification']);
Route::get('/ShowAddGlava', [IndexController::class, 'ShowAddGlava']);
Route::get('/ShowAddTeams', [IndexController::class, 'ShowAddTeams']);
Route::get('/SettingsUser', [IndexController::class, 'SettingsUser']);
Route::get('/ShowReplaceComics', [IndexController::class, 'ShowReplaceComics']);
Route::get('/ShowReplaceGlava', [IndexController::class, 'ShowReplaceGlava']);
Route::get('/ShowReplaceTeams', [IndexController::class, 'ShowReplaceTeams']);

Route::get('/search', [IndexController::class, 'search']);
Route::get('/search', [IndexController::class, 'findSomeThing']);

Route::get('/team/{id}', [IndexController::class, 'teamShow']);
Route::get('/team_add', [IndexController::class, 'addTeamShow']);
Route::post('/team_add', [IndexController::class, 'addTeam']);

Route::get('comic/{title}',[IndexController::class, 'comicPage']);
Route::get('/comic_add', [IndexController::class, 'addComicShow']);
Route::post('/comic_add', [IndexController::class, 'addComic']);
Route::get('/comic_edit/{title}', [IndexController::class, 'editComic']);

Route::get('comic/{title}/{id}',[IndexController::class, 'glavaView']);

Route::get('glava_add/{title}', [IndexController::class, 'addGlavaShow']);
Route::post('glava_add/{title}', [IndexController::class, 'addGlava']);

Route::get('/rules', [IndexController::class, 'ruleShow']);

//Route::get('/profile', function () {})->middleware('auth');
//админ
Route::get('/MyManga', [AdminController::class, 'index'])->name('home');
Route::patch('/admin/edit', [AdminController::class, 'update'])->name('update');
Route::delete('/admin/delete/{user}', [AdminController::class, 'delete'])->name('delete');
Route::post('/admin/edit/{user}', [AdminController::class, 'edit'])->name('edit');
Route::get('/feedback_panel', [IndexController::class, 'feedback_panel']);
Route::get('/ConsOfApp', [IndexController::class, 'ConsOfApp']);
Route::get('/ziavka', [IndexController::class, 'ziavka']);
Route::get('/Admins', [IndexController::class, 'Admins']);
Route::get('/Settings', [IndexController::class, 'Settings']);

//Route::get('/', function () {
   // return view('welcome');
//});

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/{id}', [IndexController::class, 'userShow']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
