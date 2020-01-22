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



//Route::get('/test', function () {
  //  return view('tubes/tubes1');
//});

//Route::get('/blog', 'BlogController@index');

//Route::get('/blog/{id}', 'BlogController@show');

Route::get('/', function () {
    return view('index');
    // return view('welcome');
});


Route::get('/2', function () {
    return view('formulirMasy');
    // return view('welcome');
});


Route::get('/3', function () {
    return view('laporform');
    // return view('welcome');
});


Route::get('/4', function () {
    return view('bpbd');
    // return view('welcome');
});




Route::get('/aboutbpbd', function () {
    return view('aboutbpbd');
    // return view('welcome');
});


Route::get('/login2', function () {
    return view('SilahkanLogin');
    // return view('welcome');
});

// Route::get('/login3', function () {
//     return view('bnpb.login');
//     // return view('welcome');
// });


Route::get('/login1', function () {
    return view('loginlayout');
    // return view('welcome');
});

Route::get('/register1', function () {
    return view('registerlayout');
    // return view('welcome');
});

Route::get('/laporan', function () {
    return view('bencana/create');
    // return view('welcome');
});

Route::get('/edit1', function () {
    return view('bencana/edit');
    // return view('welcome');
});


Route::get('/rekapmasy', function () {
    return view('bencana.index');
    // return view('welcome');
});


Route::get('/loginn', function () {
    return view('auth/login');
    // return view('welcome');
});


// Route::get('/loginadmin', function () {
//     return view('admin/login');
//     // return view('welcome');
// });
//

Route::get('/admin/bpbd/rekap', 'AdminController@rekap');
Route::post('/admin/bpbd/rekap', 'AdminController@verif');
Route::get('/admin/bpbd', 'AdminController@index');

Route::get('/admin', 'AdminController@login');

Route::post('/loginPost', 'AdminController@loginPost');

Route::get('/Logout', 'AdminController@logout');

//BNPB



Route::get('bnpb/bnpb/rekap', 'BNPBController@rekap');

Route::get('/bnpb/index', 'BNPBController@index');

Route::get('/bnpb', 'BNPBController@login');

Route::post('/loginPost2', 'BNPBController@loginPost2');

Route::get('/Logout', 'BNPBController@logout');

Route::resource('/bencana', 'BencanaController');


Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'AjaxController@selectAjax']);

//Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
