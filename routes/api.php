<?php

use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http://localhost:3000/api/
// universal resourece locator (URL)
// tickets 
// users
// contracts
 


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/tikects', function(){
    return Ticket::all();
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 