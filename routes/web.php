<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/generate-schedule', [ScheduleController::class, 'generate']);

