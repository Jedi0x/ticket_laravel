<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrioritiesController;
use App\Http\Controllers\TypeController;

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

//Auth Routes
Route::get('login', [LoginController::class,'index'])->name("login");
Route::post('login', [LoginController::class,'login'])->name("login");
Route::get('logout', [LoginController::class,'logout'])->name("logout");


Route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('role', RoleController::class);
    Route::post('fetch_role',[RoleController::class,'fetch_role_ajax'])->name('role.fetch');

    Route::resource('permission', PermissionController::class);
    Route::post('fetch_permission',[PermissionController::class,'fetch_permission_ajax'])->name('permission.fetch');

    Route::resource('user', UserController::class);
    Route::post('fetch_user',[UserController::class,'fetch_user_ajax'])->name('user.fetch');
    
    Route::resource('customer', CustomerController::class);
    Route::post('fetch_customer',[CustomerController::class,'fetch_customer_ajax'])->name('customer.fetch');

    Route::resource('organization', OrganizationController::class);
    Route::post('fetch_organization',[OrganizationController::class,'fetch_organization_ajax'])->name('organization.fetch');
    
    Route::resource('contact', ContactController::class);
    Route::post('fetch_contact',[ContactController::class,'fetch_contact_ajax'])->name('contact.fetch');
    
    Route::resource('category', CategoryController::class);
    Route::post('fetch_category',[CategoryController::class,'fetch_category_ajax'])->name('category.fetch');

    Route::resource('status', StatusController::class);
    Route::post('fetch_status',[StatusController::class,'fetch_status_ajax'])->name('status.fetch');

    Route::resource('priority', PrioritiesController::class);
    Route::post('fetch_priority',[PrioritiesController::class,'fetch_priority_ajax'])->name('priority.fetch');
    
    Route::resource('department', DepartmentController::class);
    Route::post('fetch_department',[DepartmentController::class,'fetch_department_ajax'])->name('department.fetch');

    Route::resource('evaluation', EvaluationController::class);
    Route::post('fetch_evaluation',[EvaluationController::class,'fetch_evaluation_ajax'])->name('evaluation.fetch');

    Route::resource('type', TypeController::class);
    Route::post('fetch_type',[TypeController::class,'fetch_type_ajax'])->name('type.fetch');
});

