<?php

use App\Http\Controllers\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return \App\Models\User::all();
});

// region Authenticated
Route::middleware('auth:sanctum')->group(function() {

    Route::post('question', Question\StoreController::class)->name('questions.store');

});
// endregion
