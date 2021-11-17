<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CheckoutsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    // Route::get('/books', [BooksController::class,'index']);
    Route::post('/books', [BooksController::class,'store']);
    Route::apiResource('/checkouts', CheckoutsController::class);
    // Route::apiResource('/books', BooksController::class)->except(['store', 'create', 'index']);
    // Route::apiResource('/books/{book}', [BooksController::class, 'updateBookTitle']);
    // Route::apiResource('/books/{book}', [BooksController::class, 'destroyBook']);
    // Route::post('/checkouts/checkout', [CheckoutsController::class, 'store']);
    // Route::get('/checkouts/checkout', [CheckoutsController::class, 'index']);
    // Route::get('/checkouts/checkout', [CheckoutsController::class, 'show']);
    // Route::put('/checkouts/checkout', [CheckoutsController::class, 'update']);
    // Route::post('/checkouts/checkout', [CheckoutsController::class, 'checkIn']);

});

//Books/{Book}
//For one specific book

