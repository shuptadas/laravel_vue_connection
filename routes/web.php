<?php

use App\Http\Controllers\ActorRoleController;
use App\Http\Controllers\CourseStudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LearnAjaxController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Models\Customer;

Route::get("/learn", [LearnAjaxController::class,"view"]);
Route::post("/learn", [LearnAjaxController::class,"store"])->name("store");
Route::get("/retreive", [LearnAjaxController::class,"retreive"])->name("retreive");


Route::get('/', function () {
    return view('learnAjax.create');
});

// Route::get("/", [userController::class,"showUsersdb"])->name('home');
// Route::get("/user/{id}", [userController::class,"singleUser"])->name('view.user');
// Route::get("/add", [userController::class,"addUser"]);
// Route::get("/update", [userController::class,"updateUser"]);
// Route::get("/delete/{id}", [userController::class,"deleteUser"])->name('delete.user');


// //customer model
// Route::get('/customer', function () {
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

// Route::get("/customer/view", [CustomerController::class,"cusView"]);
// Route::get("/customer/delete/{id}", [CustomerController::class, "cusDelete"])->name('delete.customer');
// Route::get("/onetoone", [CustomerController::class, "oneToOne"]);
// Route::get("/onetomany", [CustomerController::class, "oneToMany"]);


// //for manytomany course_student
// Route::get("/manytomany/insert", [CourseStudentController::class,"dataInsert"]);
// Route::get("/manytomany/view", [CourseStudentController::class,"view"]);

// //for manytomany actor_role
// Route::get("/manytomany/view2", [ActorRoleController::class,"view"]);


////////-----group contoller class----///////////////
// Route::controller(pageController::class)->group(function () {
//     Route::get('/','showHome' )->name('home');
//     Route::get('/blog','showBlog' )->name('blog');
//     Route::get('/user/{id}', 'showUser' )->name('users');

// });
// Route::get('/',[pageController::class, 'showHome'] )->name('home');
// Route::get('/blog',[pageController::class, 'showBlog'] )->name('blog');
// Route::get('/user/{id}',[pageController::class, 'showUser'] )->name('users');



// Route::get('/',[pageController::class, 'showUser'] );

///////////////'''''''Name'''''''''''''''////////////////


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('post/postchange', function () {
//     return view('post');
// })->name('mypost');

//////////...........group routing..........///////////
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::prefix('page')->group(function () {
//     Route::get('/about', function () {
//         return view('about');
//     })->name('about');

//     Route::get('post/postchange', function () {
//         return view('post');
//     })->name('mypost');
// });



//////////////........parameter pass while routing..........//////////
// Route::get('/post/{id}', function (string $id) {
//     // return view('post');
//     return "<h1>post page, Id : ". $id . "</h1>";
// });

// Route::get('/post/{id?}', function (string $id=null) {
//     if ($id) {return "<h1>post page, Id : ". $id . "</h1>";}
//     else {return "<h1>post page, No id found</h1>"; }

// });

// Route::get('/post/{id}', function (string $id) {
//     if ($id) {return "<h1>post page, Id : ". $id . "</h1>";}
//     else {return "<h1>post page, No id found</h1>"; }

// })->whereNumber('id');

// Route::get('/aa', function () {
//     return view('post');
//     // return "<h1>post page</h1>";
// });

// Route::view('/post','post');
