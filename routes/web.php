<?php

use App\Http\Controllers\IpInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/ip/lookup', [IpInformationController::class, 'lookup']);
