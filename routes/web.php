<?php

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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Poetries;

/**
 * 官网
 */

Route::get('/index', 'IndexController@index');

/**
 * 管理后台
 */

//页面渲染
/*Route::get('/mkadmin', 'AdminController@index');
Route::get('/listen', 'AdminController@listen');*/
Route::any('/listenAdd', 'AdminController@listenAdd');
Route::get('/listen/editor/{poetry_id}', 'AdminController@editor');
Route::post('/listen/update', 'AdminController@update');

Route::get('/login', 'LoginController@login');
Route::post('/login/validation', 'LoginController@validation');
Route::get('/register', 'LoginController@register');
Route::post('/register_save', 'LoginController@register_save');

Route::group(['middleware' => ['web', 'admin.login']], function () {
    Route::get('/mkadmin', 'AdminController@index');
    Route::get('/listen', 'AdminController@listen');
});

//API接口
Route::post('/poetry/save', 'AdminApiController@save');
/**
 * 移动端
 */

Route::get('/listen/{poetry_id}', 'MobileController@listenPoetry');
//测试
Route::get('/', function () {
    echo phpinfo();
    //return view('welcome');
});

Route::get('/database', function () {
    $book = Poetries::all();
    dd($book);
});
