<?php

use Illuminate\Support\Facades\Route;


//
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::namespace(value: 'Site')->group(function(){
	Route::get(url: '/', action: 'HomeController@index');
});
*/

Route::namespace("Site")->group(function(){

	//HOME
	//Route::get("/", "HomeController@index");
	//Route::get("/", [HomeController::class, "index"]);
	Route::get("/", [HomeController::class, "__invoke"])->name('site.home');
	//Route::get('/', 'HomeController')->name('site.home');

	//CATEGORIA
	Route::get("categorias", [CategoryController::class, "index"])->name('site.products');
	//Route::get('produtos', 'CategoryController@index')->name('site.products');

	//CATEGORIA - PRODUTOS
	Route::get("categorias/{slug}", [CategoryController::class, "show"])->name('site.products.category');
	//Route::get('produtos/{category}', 'CategoryController@show')->name('site.products.category');

	//BLOG
	Route::get("blog", [BlogController::class, "__invoke"])->name('site.blog');
	//Route::get('blog', 'BlogController')->name('site.blog');

	//SOBRE - PAGINA ESTATICA
	Route::view("sobre", "site.about.index")->name('site.about');
	//Route::view('sobre', 'site.about.index')->name('site.about');

	//CONTATO - GET
	Route::get("contato", [ContactController::class, "index"])->name('site.contact');
	//Route::get('contato', 'ContactController@index')->name('site.contact');

	//CONTATO - POST
	Route::post("contato", [ContactController::class, "form"])->name('site.contact.form');
	//Route::post('contato', 'ContactController@form')->name('site.contact.form');

});






