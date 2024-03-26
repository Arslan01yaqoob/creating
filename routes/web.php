<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;

Route::controller(LawyerController::class)->group(function(){

    Route::get('/','givemelawyers')->name('home');

    Route::get('/lawyer/{id}','singlelawyer')->name('view.user');
    
    Route::post('/add','addLawyer') ->name('addlawyer');
    
    Route::post('/update/{id}','updatelawyer')->name('updatelawyer');
    Route::get('/updatepage/{id}','updatepage')->name('update.page');

    
    Route::get('/dell/{id}', 'Deletelawyer')->name('delete.user');
    


});




Route::view('newuser','/addUser');
// Route::view('upuser','/updatepage');


// Route::get('/', function () {
//     return view('welcome');
// });
