<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/generate-schedule', [ScheduleController::class, 'generate']);
Route::get('/weekly-schedule', [ScheduleController::class, 'index'])->name('weekly.schedule');
