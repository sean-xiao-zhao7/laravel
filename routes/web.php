<?php

use App\Models\Address;
use App\Models\Post;
use App\Models\User;
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

Route::get('/addaddress', function () {
    $user = User::findOrfail(1);
    $address = new Address(['name' => 'Test address 1234.']);
    $user->address()->save($address);
    return 'Added address.';
});

Route::get('/adduser', function () {
    $user = new User(['name' => 'test user', 'email' => 'Test email', 'password' => 'Test password']);
    $user->save();
    return 'Added user';
});

Route::get('/addpost', function () {
    $user = User::findOrfail(1);
    $post = new Post(['title' => 'Test post title', 'name' => 'Test post name']);
    $user->posts()->save($post);
});

Route::get('/getposts', function() {
    $user = User::findOrfail(1);

})
