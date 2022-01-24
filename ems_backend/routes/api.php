<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EventDataController;
use App\Http\Controllers\Api\NewEventController;
use App\Http\Controllers\Api\NewTicketController;
use App\Http\Controllers\Api\ReportsController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function(){
    return;
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', [AuthController::class, 'me']);
    
    Route::post('/createnewticket', 'Api\NewTicketController@createNewTicket');
    Route::post('/createnewevent', 'Api\NewEventController@createNewEvent');
    Route::put('/editevent/{id}', 'Api\NewEventController@editEvent');
    Route::post('/editeventalt', 'Api\NewEventController@editEventAlt');
    Route::delete('/deleteevent/{id}', 'Api\NewEventController@deleteEvent');

    Route::get('/gettrendingevents', 'Api\EventDataController@getTrendingEvents');
    Route::get('/geteventdata/{id}', 'Api\EventDataController@getEventData');
    Route::get('/getsportsevents', 'Api\EventDataController@getSportsEvents');
    Route::get('/getfunevents', 'Api\EventDataController@getFunEvents');
    
    Route::get('/getsalesoverview', 'Api\ReportsController@getSalesOverview');
    Route::get('/getsalesdetails', 'Api\ReportsController@getSalesDetails');
    Route::get('/getbookingdetails', 'Api\ReportsController@getBookingDetails');
    
});