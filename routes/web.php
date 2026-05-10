<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

// Frontend Routes
Route::controller(FrontendController::class)->group(function(){
    Route::get('/uk-business-service-details', 'businessDetails')->name('businessDetails');
    Route::get('/web-service-details', 'webDetails')->name('webDetails');
    Route::get('/amazon-service-details', 'amazonDetails')->name('amazonDetails');
    Route::get('/logo-design-service-details', 'logoDesignDetails')->name('logoDesignDetails');
    Route::get('/it-consultation-services-details', 'itConsultationDetails')->name('itConsultationDetails');
    Route::post('/contact-send', 'contactSend')->name('contact.send');
});


// End Frontend Routes

// Backend Routes


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
