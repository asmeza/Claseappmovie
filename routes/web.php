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

Route::get('/', function () {
    return view('welcome');
});

route::get('home',[
'as' => 'home',
'uses' => 'homecontroller@inicio'
    ]
);

route::resource('user', 'UsersController');

route::resource('movie', 'MovieController');



route::get('report',[
        'as' => 'report',
        'uses' => 'MovieController@report'
    ]
);

route::get('delete',[
        'as' => 'delete',
        'uses' => 'MovieController@delete'
    ]
);

route::get('update',[
        'as' => 'update',
        'uses' => 'MovieController@update'
    ]
);