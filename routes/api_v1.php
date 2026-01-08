<?php

use App\Http\Controllers\Api\V1\TicketController;
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
 

//api/v1/tickets/{}
Route::apiResource('tickets', TicketController::class);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 