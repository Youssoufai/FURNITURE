<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FurnitureItemController;

Route::get('furniture-items', [FurnitureItemController::class, 'index']);
Route::get('furniture-items/{id}', [FurnitureItemController::class, 'show']);
Route::post('furniture-items', [FurnitureItemController::class, 'store']);
Route::put('furniture-items/{id}', [FurnitureItemController::class, 'update']);
Route::delete('furniture-items/{id}', [FurnitureItemController::class, 'destroy']);
