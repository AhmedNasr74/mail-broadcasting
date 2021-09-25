<?php

use App\Http\Controllers\MailingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::post('/boradcasting/send', [MailingController::class, 'sendMailBroadcasting']);
