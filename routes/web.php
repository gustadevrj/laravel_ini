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
	Route::get("/", [HomeController::class, "__invoke"]);

	//CATEGORIA
	Route::get("categorias", [CategoryController::class, "index"]);

	//CATEGORIA - PRODUTOS
	Route::get("categorias/{slug}", [CategoryController::class, "show"]);

	//BLOG
	Route::get("blog", [BlogController::class, "__invoke"]);

	//SOBRE - PAGINA ESTATICA
	Route::view("sobre", "site.about.index");

	//CONTATO - GET
	Route::get("contato", [ContactController::class, "index"]);

	//CONTATO - POST
	Route::post("contato", [ContactController::class, "form"]);
	

});





