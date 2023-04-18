<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\frontend\FrontendController;

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



Auth::routes();

//For Pages & Home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/portfolio',[App\Http\Controllers\HomeController::class,'portfolio'])->name('portfolio');
Route::get('/service',[App\Http\Controllers\HomeController::class,'service'])->name('service');
Route::get('/Yii',[App\Http\Controllers\HomeController::class,'Yii'])->name('Yii');
Route::get('/Codeigniter',[App\Http\Controllers\HomeController::class,'Codeigniter'])->name('Codeigniter');
Route::get('/Laravel',[App\Http\Controllers\HomeController::class,'Laravel'])->name('Laravel');
Route::get('/Magento',[App\Http\Controllers\HomeController::class,'Magento'])->name('Magento');
Route::get('/WordPress',[App\Http\Controllers\HomeController::class,'WordPress'])->name('WordPress');
Route::get('/PHP',[App\Http\Controllers\HomeController::class,'PHP'])->name('PHP');
Route::get('/Ruby',[App\Http\Controllers\HomeController::class,'Ruby'])->name('Ruby');

Route::get('/',[FrontendController::class,'index']);

Route::get('/user',[HomeController::class,'user'])->name('user');

//For Blogs
Route::get('/blog',[FrontendController::class,'blog'])->name('blog');
Route::get('/blogsingle/{id}',[FrontendController::class,'blogsingle'])->name('blogsingle');

//For Comments
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function()
{
    Route::get('/dashboard',[DashboardController::class,'index']);

    //For Settings
    Route::get('/settings',[SettingsController::class,'index']);
    Route::post('/settings',[SettingsController::class,'savedata']);

    // For Category
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('add-category',[CategoryController::class,'create']);
    Route::post('add-category',[CategoryController::class,'store']);
    Route::get('edit-category/{category_id}',[CategoryController::class,'edit']);
    Route::put('update-category/{category_id}',[CategoryController::class,'update']);
    Route::get('delete-category/{category_id}',[CategoryController::class,'delete']);
    //Route::post('delete-category',[CategoryController::class,'delete']);

    //For Posts
    Route::get('posts',[PostController::class,'index']);
    Route::get('add-post',[PostController::class,'create']);
    Route::post('add-post',[PostController::class,'store']);
    Route::get('post/{post_id}',[PostController::class,'edit']);
    Route::put('update-post/{post_id}',[PostController::class,'update']);
    Route::get('delete-post/{post_id}',[PostController::class,'delete']);

});
