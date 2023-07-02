<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;

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
Static Route
*/

/*
dynamic route
*/

/*
Route Name
*/

/*
Controller part
in cmd, php artisan make:controller ArticleController
in cmd, php artisan make:controller Product/ProductController
*/
Route :: get('/articles',[ArticleController :: class , 'index']);

Route :: get ('/articles/detail',[ArticleController :: class , 'details']);
?>