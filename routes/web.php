<?php

use Admin\UserController;
use Trainer\TrainerMainController;
use Trainer\TUserController;
use Trainer\TrainerProfileController;
use Trainer\TrainerChangepwController;
use Trainer\AttendanceController;
use Trainer\TrainerDashboardController;
use Admin\AboutPageController;
use Admin\GeneralSettingController;
use Admin\MemberController;
use Admin\AdminMemberController;
use Admin\ContactController;
use Admin\TrainerController;
use Admin\WhatProvideController;
use Admin\ScheduleController;
use Admin\PackageController;
use Admin\DashboardCOntroller;
use Admin\AdminFeedbackController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\SendNotificationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Trainer\AttendanceController as TrainerAttendanceController;
use App\Models\Aboutus;
use App\Models\Package;
use App\Models\WhatProvide;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    $about=Aboutus::all();
    $provide=WhatProvide::all();
    $package=Package::all();
    $schedule = Schedule::
        select('schedules.*','users.name')
        ->join("users", "users.id", "=", "schedules.user_id")
        ->get();
    return view('frontend.home', compact('about','provide','package','schedule'));
});
Route::get('/joinus', function () {
    $package=Package::all();
    return view('frontend.joinus',compact('package'));
});
Route::get('/singleclass/{id}', function ($id) {
    $schedule = Schedule::
        select('schedules.*','users.name')
        ->join("users", "users.id", "=", "schedules.user_id")
        ->where('schedules.id','=',$id)
        ->first();
    return view('frontend.singleclass',compact('schedule'));
});
Route::get('/about', function () {
    $about=Aboutus::all();
    return view('frontend.about', compact('about'));
});

Route::view('/home', 'frontend.home')->middleware('auth');
Route::view('/profile', 'frontend.profile')->middleware('auth');
Route::view('/changepassword', 'frontend.changepassword')->middleware('auth');
Route::view('/feedback', 'frontend.feedback')->middleware('auth');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/feedback', [FeedbackController::class, 'createFormFeedback']);
Route::post('/feedback', [FeedbackController::class, 'FeedbackForm'])->name('feedback.store');



Route::prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::view('/login', 'admin.login')->name('admin.login');
    Route::resource('dashboard' , UserController::class);
    Route::resource('admindashboard' , DashboardCOntroller::class);
    Route::resource('settings', GeneralSettingController::class);
    Route::resource('trainers', TrainerController::class);
    Route::resource('user', AdminMemberController::class);
    Route::resource('member', MemberController::class);
    Route::resource('aboutus', AboutPageController::class);
    Route::resource('whatprovide', WhatProvideController::class);
    Route::resource('contactus', ContactController::class);
    Route::resource('plans', PackageController::class);
    Route::resource('schedule', ScheduleController::class);
    Route::resource('feedback', AdminFeedbackController::class);
    Route::get('/sendNotification',[SendNotificationController::class,'sendNotification']);
    Route::post('/validatepayment',[App\Http\Controllers\HomeController::class,'validatepayment']);
    Route::post('/sendFeedback',[App\Http\Controllers\HomeController::class,'sendFeedback']);
});

Route::prefix('trainer')->middleware(['auth.trainer'])->name('trainer.')->group(function(){
    Route::view('/login', 'trainer.login')->name('trainer.login');
    Route::resource('dashboard' , TrainerMainController::class);
    Route::resource('trainerdashboard' ,TrainerDashboardController::class);
    Route::resource('/users', TUserController::class);
    Route::resource('/trainersettings', TrainerProfileController::class);
    Route::resource('/trainerpassword', TrainerChangepwController::class);
    Route::resource('/attendance', AttendanceController::class);
    Route::post('/sendFeedback',[App\Http\Controllers\HomeController::class,'sendFeedback']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('frontend.home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('frontend.profile');
// Route::get('/register/{id}', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/register/{id}', function ($id) {
    $package = Package::
        select('packages.*')
        ->where('packages.id','=',$id)
        ->first();
    return view('auth.register',compact('package'));
});
Route::get('/payment/verification', [App\Http\Controllers\PaymentController::class, 'verification']);
// Route::post('/register/payment', [App\Http\Controllers\PaymentController::class, 'create'])->name('register.payment');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');
Route::get('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->name('notification');
// Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('frontend.home');
