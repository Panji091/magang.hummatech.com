<?php

use App\Http\Controllers\Admin\DivisionController;
use Illuminate\Support\Facades\Route;

Route::get('division', [DivisionController::class, 'index']);