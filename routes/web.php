<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\StudentController;
///////

use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LeadsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/tadd', function () {
//     return view('Teacher.Tadd');
// });
// Route::get('/tshow', function () {
//     return view('Teacher.Tshow');
// });
// Route::get('/sadd',[StudentController::class,'index']);

   

// // Route::get('/sshow', function () {
// //     return view('student.Sshow');
// // });
// Route::get('/adclass', function () {
//     return view('Teacher.adclass');
// });
// // Route::get('/showcls', function () {
// //     return view('Teacher.showclass');
// // });
// Route::get('/adsub', function () {
//     return view('Teacher.adsub');
// });
// Route::get('/showsub', function () {
//     return view('Teacher.showsub');
// });
// // Route::get('/subshow', function () {
// //     return view('Teacher.showsub');
// // });
// Route::post('/savedata', function () {
//     return view('Teacher.Tadd');
// });

// Route::post('/creg', [App\Http\Controllers\HomeController::class, 'ccreate'])->name('creg');

 Auth::routes();

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/tdelete/{id}', [HomeController::class, 'tdestroy']);
// Route::get('/tedit/{id}', [HomeController::class,'Tedit']);
// Route::post('/tupdate/{id}', [HomeController::class,'Tupdate']);
// Route::get('/show/{role}', [HomeController::class, 'Show']);
// Route::get('logout', [HomeController::class, 'logout']);
// Route::get('Sshow/Student', [HomeController::class, 'Sshow']);
// Route::get('/stdelete/{id}', [HomeController::class, 'stdestroy']);
// Route::get('/stedit/{id}', [HomeController::class, 'stedit']);
// Route::post('/stupdate/{id}', [HomeController::class, 'stupdate']);

// // class route
// Route::post('/store', [ClassController::class,'save']);
// Route::get('/showcls', [ClassController::class,'Showclass']);
// Route::get('/cdelete/{id}', [ClassController::class, 'cdestroy']);
// Route::get('/cedit/{id}', [ClassController::class, 'cEdit']);
// Route::post('cupdate/{id}', [ClassController::class, 'cupdate']);
// // sub route
// Route::post('/store-data', [SubController::class,'save']);
// Route::get('/showsub', [SubController::class,'Showsub']);
// Route::get('/sdelete/{id}', [SubController::class, 'sdestroy']);
// Route::get('/sedit/{id}', [SubController::class, 'sEdit']);
// Route::post('supdate/{id}', [SubController::class, 'supdate']);

//Route

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/blogs',[App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/career',[App\Http\Controllers\CareerController::class, 'index'])->name('career');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact',[App\Http\Controllers\ContactController::class, 'insert']);
Route::get('/ourteam',[App\Http\Controllers\ourteamcontroller::class, 'index'])->name('ourteam');
Route::get('/service',[App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/blog/{slug}',[App\Http\Controllers\PostController::class, 'public'])->name('blog');
Route::get('/service/{slug}',[App\Http\Controllers\PostController::class, 'public'])->name('serviceslug');
Route::get('/page/{slug}',[App\Http\Controllers\PostController::class, 'public'])->name('page');
Route::get('/job/{slug}',[App\Http\Controllers\PostController::class, 'public'])->name('job');
Route::post('/get-quotation/insert',[App\Http\Controllers\LeadsController::class, 'insert'])->name('form');





Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

 Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/admin/add-blog', [PostController::class,'create' ]);
    Route::get('/admin/blogs', [PostController::class,'index' ]);
    Route::get('/admin/edit-blog/{id}', [PostController::class,'edit' ]);
    Route::post('/admin/insert-blog', [PostController::class,'insert' ]);
    Route::get('/admin/delete-blog/{id}', [PostController::class,'destroy' ]);
    Route::post('/admin/update-blog/{id}', [PostController::class,'update' ]);
    Route::get('/admin/dashboard', [DashboardController::class,'index' ]);
    Route::get('/admin/leads', [LeadsController::class,'index' ]);
    Route::get('/admin/contact', [ContactController::class,'list' ]);
 });

Route::get('/clear', function () {
    \Artisan::call('optimize');
});