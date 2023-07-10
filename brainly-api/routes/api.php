<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthenticationController;


Route::middleware(['auth:sanctum'])->group(function () {
    route::get('/logout', [AuthenticationController::class, 'logout']);
    route::get('/me', [AuthenticationController::class, 'me']);
    route::post('/question', [QuestController::class, 'store']);
    route::patch('/question/{id}', [QuestController::class, 'update'])->middleware('pemilik-pertanyaan');
    route::delete('/question/{id}', [QuestController::class, 'destroy'])->middleware('pemilik-pertanyaan');

    route::post('/answer', [AnswerController::class, 'store']);
    route::patch('/answer/{id}', [AnswerController::class, 'update'])->middleware('pemilik-jawaban');
    route::delete('/answer/{id}', [AnswerController::class, 'destroy'])->middleware('pemilik-jawaban');
});
route::get('/question', [QuestController::class, 'index']);
route::get('/question/{id}', [QuestController::class, 'show']);


route::post('/login', [AuthenticationController::class, 'login']);
