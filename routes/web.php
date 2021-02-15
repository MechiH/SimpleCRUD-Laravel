<?php

use Illuminate\Support\Facades\Route;
use App\User;
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
Route::get('/delete/{id}', function ($id) {
    $user=User::findOrFail($id);
    $user->delete();
    return redirect()->back();
});
Route::post('/', function () {
    // dd(Request());
    $user=new User;
    $user->Fname=Request('FN');
    $user->Lname=Request('LN');
    $user->CIN=Request('cin');
    $user->AcountN=Request('AN');
    $user->Agency=Request('Ag');
    $user->Amount=Request('Am');
    $user->save();
    return redirect('accounts');
});
Route::get('/accounts', function () {
    $users=User::All();
    return view('accounts',['users'=>$users]);
});
