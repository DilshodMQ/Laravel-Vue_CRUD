<?php

use Illuminate\Support\Facades\Route;

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'contacts']);

Route::get('/get_contact/{id}', [App\Http\Controllers\ContactController::class, 'getContact']);

Route::post('/save_contact', [App\Http\Controllers\ContactController::class, 'saveContact']);

Route::delete('/delete_contact/{id}', [App\Http\Controllers\ContactController::class, 'deleteContact']);

Route::post('/update_contact/{id}', [App\Http\Controllers\ContactController::class, 'updateContact']);
