<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-classes-by-sub-category/{id}', [App\Http\Controllers\HomeController::class, 'getClassesBySubCategory'])->name('getClassesBySubCategory');
Route::get('/enroll-in-class/{id}', [App\Http\Controllers\HomeController::class, 'enrollClass'])->name('enrollClass');
Route::get('/promo/apply', [App\Http\Controllers\CheckoutController::class, 'promoApply'])->name('promoApply');
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['role', 'auth']], function (){
   Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
   Route::resource('users', \App\Http\Controllers\Admin\UsersController::class);
    Route::put('user_status', 'App\Http\Controllers\Admin\UsersController@status')->name('user.status');
    Route::resource('categories', \App\Http\Controllers\Admin\CategoriesController::class);
    Route::put('category_status', 'App\Http\Controllers\Admin\CategoriesController@status')->name('category.status');
    Route::resource('sub-categories', \App\Http\Controllers\Admin\SubCategoriesController::class);
    Route::put('sub_category_status', 'App\Http\Controllers\Admin\SubCategoriesController@status')->name('sub_category.status');
    Route::resource('classes', \App\Http\Controllers\Admin\ClassesController::class);
    Route::put('class_status', 'App\Http\Controllers\Admin\ClassesController@status')->name('class.status');
    Route::put('class_featured_update', 'App\Http\Controllers\Admin\ClassesController@featureUpdate')->name('class.featured');

    Route::resource('instructors', \App\Http\Controllers\Admin\InstructorsController::class);
    Route::put('instructor_status', 'App\Http\Controllers\Admin\InstructorsController@status')->name('instructor.status');
    Route::resource('students', \App\Http\Controllers\Admin\StudentsController::class);
    Route::put('student_status', 'App\Http\Controllers\Admin\StudentsController@status')->name('student.status');

    // GROUPS
    Route::resource('groups', \App\Http\Controllers\Admin\GroupsController::class);
    Route::put('group_status', 'App\Http\Controllers\Admin\GroupsController@status')->name('group.status');
    Route::post('group_assign', 'App\Http\Controllers\Admin\GroupsController@groupAssign')->name('group.assign');

    // CLASS ROOM
    Route::resource('class_rooms', \App\Http\Controllers\Admin\ClassRoomsController::class);
    Route::put('class_room_status', 'App\Http\Controllers\Admin\ClassRoomsController@status')->name('class_room.status');

    // ROLES
    Route::resource('roles', \App\Http\Controllers\Admin\RolesController::class);
    // PERMISSIONS
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionsController::class);
    // PROMO CODE CRUD
    Route::resource('promo_codes', \App\Http\Controllers\Admin\PromoController::class);
    Route::put('promo_status', 'App\Http\Controllers\Admin\PromoController@status')->name('promo.status');
});

