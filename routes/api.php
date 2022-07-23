<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Events\MessageEvent;

Route::post('new-message', function (Request $request) {
// 2
    event(new MessageEvent($request->user, $request->message));
    return 'ok';
});
Route::post('login', [\App\Http\Controllers\LoginController::class,'login']);
Route::post('logout', [\App\Http\Controllers\LoginController::class,'logout']);


Route::apiResources([
    'tickets' => \App\Http\Controllers\TicketController::class,
    'users' => \App\Http\Controllers\UserController::class,
    'events' => \App\Http\Controllers\EventController::class,
    'bins' => \App\Http\Controllers\BinController::class,
]);
/*Route::get('images', [ImageController::class, 'index'])->name('images');
Route::post('images', [ImageController::class, 'upload'])->name('images');*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
