<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;

    Auth::routes();
    Route::get("/",[HomeController::class,"main"])->name('home');
    Route::get("/test",[HomeController::class,"test"])->name('verify');
    Route::get("/quiz",[HomeController::class,"quiz"])->name('quiz');
    Route::get('/page', [VerifyController::class, 'view'])->name('view');
    Route::get("/result",[HomeController::class,"result"])->name('result');

    Route::prefix('/admin')->middleware(["auth"])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('main');
    Route::get('/var', [VerifyController::class, 'result'])->name('var');
    Route::resource('quiz', QuizController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('user', UserController::class);
    Route::get('/quiz/{id}/questions',[QuizController::class,'question'])->name('quiz.question');
    Route::get('exam/assign', [ExamController::class,'create'])->name('exam.assign');
    });