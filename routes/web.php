<?php

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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('aulas')->name('aulas/')->group(static function() {
            Route::get('/',                                             'AulasController@index')->name('index');
            Route::get('/create',                                       'AulasController@create')->name('create');
            Route::post('/',                                            'AulasController@store')->name('store');
            Route::get('/{aula}/edit',                                  'AulasController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AulasController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{aula}',                                      'AulasController@update')->name('update');
            Route::delete('/{aula}',                                    'AulasController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('horarios')->name('horarios/')->group(static function() {
            Route::get('/',                                             'HorariosController@index')->name('index');
            Route::get('/create',                                       'HorariosController@create')->name('create');
            Route::post('/',                                            'HorariosController@store')->name('store');
            Route::get('/{horario}/edit',                               'HorariosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'HorariosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{horario}',                                   'HorariosController@update')->name('update');
            Route::delete('/{horario}',                                 'HorariosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('videojuegos')->name('videojuegos/')->group(static function() {
            Route::get('/',                                             'VideojuegosController@index')->name('index');
            Route::get('/create',                                       'VideojuegosController@create')->name('create');
            Route::post('/',                                            'VideojuegosController@store')->name('store');
            Route::get('/{videojuego}/edit',                            'VideojuegosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'VideojuegosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{videojuego}',                                'VideojuegosController@update')->name('update');
            Route::delete('/{videojuego}',                              'VideojuegosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('categoria')->name('categoria/')->group(static function() {
            Route::get('/',                                             'CategoriaController@index')->name('index');
            Route::get('/create',                                       'CategoriaController@create')->name('create');
            Route::post('/',                                            'CategoriaController@store')->name('store');
            Route::get('/{categorium}/edit',                            'CategoriaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategoriaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{categorium}',                                'CategoriaController@update')->name('update');
            Route::delete('/{categorium}',                              'CategoriaController@destroy')->name('destroy');
        });
    });
});