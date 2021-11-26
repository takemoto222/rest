<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello'
    ], 200);
});
