<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

Route::middleware(['auth','log.request'])->group(function(){
    Route::get('/feeds',[FeedController::class, 'index'])->name('feeds');

    Route::get('/feed/create',[FeedController::class, 'create'])->name('feed.create');
    Route::post('/feed/store',[FeedController::class, 'store'])->name('feed.store');
    
    Route::put('/feed/update/{feed}',[FeedController::class, 'update'])->name('feed.update');
    Route::get('/feed/show/{feed}',[FeedController::class, 'show'])->name('feed.show');  
});





