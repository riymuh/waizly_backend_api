<?php
use App\Domain\Employee\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'GetAllEmployee']);
Route::get('/{id}', [EmployeeController::class, 'GetEmployee']);
Route::patch('/{id}/update', [EmployeeController::class, 'updateEmployee']);
Route::post('/create', [EmployeeController::class, 'storeEmployee']);
Route::delete('/{id}/delete', [EmployeeController::class, 'deleteEmployee']);
