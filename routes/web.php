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


Route::get('/about', function (){
    return view('about');
    
});

Route::get('/about/about', function (){
    return view('aboutabout');
    
});

Route::get('profile/{id}', function($id) {
    $lol = \App\User::find($id);
    $name = $lol->name;
    $email = $lol->email;
    
    $data = [
        'id' => $id,
        'vards' => $name,
        'epasts' => $email,
        'darbs' => 'Noslēpums',
        'gadi' => '5'  
    ];
    
    return view('profile', $data);
});