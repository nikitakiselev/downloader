<?php

use App\Http\Controllers\V1\DownloadJobController;
use Illuminate\Support\Facades\Route;

Route::post('/v1/download', [DownloadJobController::class, 'add']);
