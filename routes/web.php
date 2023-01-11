<?php

use App\Http\Controllers\MyResearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UrgentCabController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ReadLaterController;
use App\Http\Controllers\ReadAlreadyController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CommentReplyController;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/mon_profile', function () {
    return view('mon_profile');
});
Route::get('/email', function () {
    return view('email');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/adminprofile', [AdminProfileController::class,'index']);

Route::post('/create_tag', [TagsController::class,'create_tag']);

Route::get('/delete_tag/{id}', [TagsController::class,'delete_tag']);

Route::get('/accueil', [AccueilController::class,'index']);

Route::get('/ajouter-un-destinataire', function () {
    return view('ajouter-un-destinataire');
});
Route::get('/ajouter-un-utilisateur', function () {
    return view('ajouter-un-utilisateur');
});
Route::get('/urgents', [UrgentCabController::class,'index']);

Route::post('/search_urgent_article', [UrgentCabController::class,'search_urgent_article']);


Route::get('/urgents2', function () {
    return view('urgents2');
});
Route::get('/article/{id}' , [ArticlesController::class , 'show_article'])->name('show_article');

Route::post('/article_comment' , [CommentsController::class , 'insert_comment'])->name('article_comment');

Route::get('/delete_comment/{id}' , [CommentsController::class , 'delete_comment'])->name('delete_comment');

Route::get('/delete_reply/{id}' , [CommentReplyController::class , 'delete_reply'])->name('delete_reply');

Route::get('/newsletter', [ArticlesController::class,'index']);

Route::post('/create_newsletter', [ArticlesController::class,'create_newsletter']);

Route::post('/save_newsletter', [ArticlesController::class,'save_newsletter']);

////////new route 3rd november
Route::get('/categories',[CategoryController::class,'index']);

Route::get('/get_subcat/{id}',[CategoryController::class,'get_subcat']);

Route::post('/search_article',[ArticlesController::class,'search_article']);

Route::get('/categories/{id}' , [ArticlesController::class , 'show_detail'])->name('show_all_sub_category');

Route::get('/mark_urgent/{id}' , [ArticlesController::class , 'mark_urgent']);

Route::get('/mark_like/{id}' , [ArticlesController::class , 'mark_like']);

Route::get('/mark_read/{id}' , [ArticlesController::class , 'mark_read']);

Route::get('/mark_readlater/{id}' , [ArticlesController::class , 'mark_readlater']);

Route::get('/category_alcool', function () {
    return view('category_alcool');
});

Route::get('/jaime',[LikesController::class,'index']);

Route::post('/search_jaime',[LikesController::class,'search_jaime']);

Route::get('/je_lis_plus_tard',[ReadLaterController::class,'index']);

Route::post('/readlater_search',[ReadLaterController::class,'readlater_search']);

Route::get('/j_ai_deja_lu',[ReadAlreadyController::class,'index']);

Route::post('/search_read_already',[ReadAlreadyController::class,'search_read_already']);

Route::get('/mes-recherches',[MyResearchController::class,'show']);

Route::get('/delete_search/{id}',[MyResearchController::class,'delete_search']);


/////////// register and login
Route::get('/register', [RegistrationController::class,'index']);
Route::post('/register', [RegistrationController::class,'register']);
Route::post('/login', [RegistrationController::class,'login']);
Route::post('/logout', [RegistrationController::class,'logout']);
Route::get('/delete_user/{id}', [RegistrationController::class,'delete_user']);
///////////// forget and reset password
Route::get('password/forgot-password', function () {
    return view('password/forgot-password', ['status' => null]);
});//ForgotPasswordController
Route::post('password/forgot-password', [RegistrationController::class, 'sendResetLinkResponse'])->name('passwords.sent');
Route::get('password/reset-password', [RegistrationController::class, 'reset']);
Route::post('password/reset-password', [RegistrationController::class, 'sendResetResponse'])->name('passwords.reset');
