<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\statisticsController;

Route::get('/', function () {
    return view('Admin.login');
})->name('admin.login');
Route::get('/Admin', function () {
    return view('Admin.index');
})->name('admin.index');
Route::post('/Admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
//Add educatrice
Route::post('/ajouter-educatrice', [AdminController::class, 'store'])->name('ajouter-educatrice');
//Consulter la liste des educatrice



Route::get('/show-educatrices', [AdminController::class, 'showTeachers'])->name('show-educatrices');
//Consulter le profile de l'educatrice 
Route::get('/profile/educatrice/{id}', function ($id) {
    // Récupérer les données de l'éducatrice avec l'ID fourni et passer les données à la vue du profil
    $educatrice = App\Models\Teacher::findOrFail($id);
    return view('Teacher.Profile', ['educatrice' => $educatrice]);
})->name('profile.educatrice');
// Supprimer l'educatrice d'apres son id
Route::delete('/delete-educatrice/{id}', [AdminController::class, 'deleteEducatrice'])->name('delete.educatrice');
//Modifier l'educatriuce d'apres son id
Route::put('/update-educatrice/{id}', [AdminController::class, 'updateEducatrice'])->name('update.educatrice');


////////////////////////////////////////////////////////////////////////////////////////////////////////////
//****************************** Children                 ******************************************  */
Route::get('/show-enfants', [AdminController::class, 'showEnfants'])->name('show-enfant');
Route::get('/profile/infant/{id}', function ($id) {
    // Récupérer les données de l'éducatrice avec l'ID fourni et passer les données à la vue du profil
    $enfant = App\Models\Child::findOrFail($id);
    return view('Child.Profile', ['enfant' => $enfant]);
})->name('profile.child');
//
///////////////////////////////////////////////////////////////////////////////////////////////////////
/************************************      Chef de la cantine ******************************************* */
//Add chef
Route::post('/ajouter-chef', [AdminController::class, 'storeChef'])->name('ajouter-chef');
Route::get('/show-chef', [AdminController::class, 'showChef'])->name('show-chef');
Route::get('/ajouter-educatrice', [AdminController::class, 'showAddForm'])->name('ajouter-educatrice');

Route::get('/ajouter-chef', [AdminController::class, 'showAddFormChef'])->name('ajouter-chef');

Route::delete('/delete-chef', [AdminController::class, 'deleteChef'])->name('delete.chef');
//showProfileChef
Route::get('/profile/chef/{id}', function ($id) {
    // Récupérer les données de l'éducatrice avec l'ID fourni et passer les données à la vue du profil
    $chef = App\Models\Chef::findOrFail($id);
    return view('Chef.Profile', ['chef' => $chef]);
})->name('profile.Chef');
Route::get('/revenu', [statisticsController::class, 'revenu']);
Route::get('/NbEnfants', [statisticsController::class, 'NbEnfants']);

Route::get('/NbEnfantsParAge', [statisticsController::class, 'NbEnfantsParAge']);
//salaire_total
Route::get('/calculerSalairesEducatrices', [statisticsController::class, 'calculerSalairesEducatrices']);
Route::get('/calculerSalaireGerant', [statisticsController::class, 'calculerSalaireGerant']);

Route::get('/calculerDepenses', [statisticsController::class, 'calculerDepenses']);
//
Route::get('/categoriserEnfants', [statisticsController::class, 'categoriserEnfants']);
//************************************************************************************************************ */


Route::get('/AdminDashboard', [AdminController::class, 'showIndex'])->name('Admin.index');
Route::get('/Demand', [AdminController::class, 'showResetPasswordForm'])->name('password.demand');
//showOTPForm
Route::get('/OTPCode', [AdminController::class, 'showOTPForm'])->name('password.code');
//showChangeForm
Route::get('/Change-password', [AdminController::class, 'showChangeForm'])->name('password.change');
//showChangeForm

Route::get('/consult', function () {
    return view('Event.Consult');
})->name('event.consult');


Route::get('/events', [EventController::class, 'getAllEvents'])->name('events.all');
//Reset password process
//OTP code generation 
Route::post('/generate-otp', [AdminController::class, 'generateAndSaveOTP'])->name('generate.otp');
//OTP code verification
Route::post('/verify-otp', [AdminController::class, 'verifyOTP'])->name('verify.otp');
