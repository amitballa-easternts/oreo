<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FirstController;
use App\http\Controllers\Register;
use App\http\Controllers\PageLink;
use App\http\Controllers\User;
use App\http\Controllers\Modeluser;


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

Route::get("user/{id}",[FirstController::class,"firstpage"]);
Route::view("user","page");
Route::get("user_second",[Firstcontroller::class,"secondpage"]);
Route::get("page_include",[FirstController::class,"page_include"]);
Route::get("reg",[Register::class,"register_form"]);
Route::post("user",[Register::class,"send_data"]);
Route::get("page_link",[PageLink::class,"page_link"]);
Route::get("my_link",function(){
        return view('page');
});
Route::get("post/{post}",function($slug){

    $path=__DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exists($path))
    {
       return redirect('/posts');
        //abort(404);
    }

    $post=file_get_contents($path);
    return view("post",[
        'post'=>$post
    ]);
});
Route::get("posts",function(){
   return view('posts');
});

//Start Group MiddleWare

// Route::get('home',function(){
//     return view('home','home')->middleware('agechecking');
// });
Route::get('noaccess',function(){
    return view('noaccess');
});
// Route::group(['middleware'=>['agechecking']],function(){
//             Route::view('home','home');
// });
//End GroupMiddleWare
Route::view('home','home')->middleware('agechecking');


//start databse Connection
Route::get("myuser",[User::class,"index"]);
//End database Conection


// Start DataBase Connection With Model
Route::get("modeluser",[ModelUser::class,"index"]);
// End Database Connection With Model
