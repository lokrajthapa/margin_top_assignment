<?php

use App\Http\Controllers\EventApiController;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/events', [EventApiController::class, 'index']);


Route::get('/event/{id}', [EventApiController::class, 'show']);
