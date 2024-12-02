<?php

<<<<<<< HEAD
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

Route::get('/','IndexController@index');
Route::get('/list','IndexController@list');
Route::get('/list2','IndexController@list2');
Route::get('/list3','IndexController@list3');
Route::get('/about','IndexController@about');
Route::get('/detail/{id}','IndexController@detail');

Route::get('user/index','UserController@index');
Route::get('user/index2','UserController@index2');
Route::get('user/index3','UserController@index3');
Route::get('user/index4','UserController@index4');
Route::get('user/index5','UserController@index5');
Route::get('user/indexu','UserController@indexu');
Route::get('user/index6','UserController@index6');
Route::get('user/uadd','UserController@uadd');
Route::get('user/kadd','UserController@kadd');
Route::get('login','LoginController@index');
Route::get('user/userindex','UserController@userindex');
Route::get('user/userindex2','UserController@userindex2');
Route::get('user/add','UserController@add');
Route::get('user/edit/{id}','UserController@edit');
Route::get('user/delete/{id}','UserController@delete');

Route::get('user/fadd','UserController@fadd');
Route::get('user/fedit/{id}','UserController@fedit');
Route::get('user/fdelete/{id}','UserController@fdelete');

Route::get('user/dadd','UserController@dadd');
Route::get('user/dedit/{id}','UserController@dedit');
Route::get('user/ddelete/{id}','UserController@ddelete');

Route::get('user/booking/{id}','UserController@booking');
Route::get('user/sf','UserController@sf');
Route::get('user/hs/{id}','UserController@hs');
Route::get('user/uuedit/{id}','UserController@uuedit');
Route::get('user/kedit/{id}','UserController@kedit');
Route::get('user/udelete/{id}','UserController@udelete');
Route::get('user/kdelete/{id}','UserController@kdelete');
Route::get('center','IndexController@center');
Route::get('yy','IndexController@yy');
Route::get('order','IndexController@order');
Route::get('logout','LoginController@logout');
Route::post('ly','IndexController@ly');
Route::post('doyy','IndexController@doyy');
Route::post('user/fnew','UserController@fnew');
Route::post('user/fupd','UserController@fupd');

Route::post('user/dnew','UserController@dnew');
Route::post('user/dupd','UserController@dupd');

Route::post('user/doedu','UserController@doedu');
Route::post('user/doedk','UserController@doedk');
Route::post('user/new','UserController@new');
Route::get('user/editu','UserController@editu');
Route::post('user/deleteall','UserController@deleteall');
Route::get('user/checkin','UserController@checkin');
Route::post('user/upd','UserController@upd');
Route::post('user/upp','UserController@upp');
Route::post('dologin','LoginController@dologin');
Route::post('doreg','LoginController@doreg');
Route::post('dologin2','LoginController@dologin2');
Route::post('dologin3','LoginController@dologin3');
Route::post('doreg2','LoginController@doreg2');

Route::post('user/doadu','UserController@doadu');
Route::post('user/doadk','UserController@doadk');
Route::get('reg','LoginController@reg');
Route::get('userlogin','LoginController@userlogin');
Route::get('userreg','LoginController@userreg');
Route::post('doul','LoginController@dologin');
Route::post('doureg','LoginController@doreg');
Route::post('doureg','LoginController@doreg');

=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController:: class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController:: class, 'create'])->name('product.create');
Route::post('/product', [ProductController:: class, 'store'])->name('product.store');
<<<<<<< HEAD
Route::get('/product/{product}/edit', [ProductController:: class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController:: class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController:: class, 'destroy'])->name('product.destroy');
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
>>>>>>> ad91a59fd3e045fc3c0c35a1d55853d8edffd3fc
