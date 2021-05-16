<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontrol;
use App\Http\Controllers\acontrol;

Route::post('/menuadd',[acontrol::class,'menuadd']);


Route::get('orders',[acontrol::class,'orders']);

Route::get('/chpass',[ucontrol::class,'chpass']);
Route::get('/profile',[ucontrol::class,'profile']);
Route::post('afeeedit/afeeupdate',[acontrol::class,'feeupdate']);
Route::get('afeeedit/{id}',[acontrol::class,'feeedit']);
Route::get('menudelete/{id}',[acontrol::class,'menudelete']);
Route::get('/afeedelete/{id}',[acontrol::class,'feedelete']);
Route::get('/afeeview',[acontrol::class,'feeview']);
Route::get('/afee',[acontrol::class,'fee']);
Route::get('/sfee',[ucontrol::class,'fee']);
Route::post('/feestore',[acontrol::class,'feestore']);
Route::post('/calc',[acontrol::class,'calc1']);

Route::post('/login',[ucontrol::class,'store']);
Route::post('/logs',[ucontrol::class,'logs']);  
Route::post('/passup',[ucontrol::class,'passupdate']);

Route::get('/logout',[ucontrol::class,'logout']);
Route::get('/edit/{sid}',[acontrol::class,'edit']);
Route::post('edit/update',[acontrol::class,'update']);
Route::get('userdelete/{id}',[acontrol::class,'delete']);

//Route::get('/vitem',[acontrol::class,'showitems']);

Route::view('/about','about');
Route::view('/contact','contact');

Route::group(['middleware'=>['AuthCheck']],function(){

    Route::get('/aitem',[acontrol::class,'item']);
    Route::get('/ahome',[acontrol::class,'home']);
    //Route::get('/astud',[acontrol::class,'stud']);
    Route::get('/amenu',[acontrol::class,'menu']);   


    Route::get('/home',[ucontrol::class,'home']);
    Route::get('/menu',[ucontrol::class,'menu']);

    Route::view('/','login');
    Route::view('/reg','reg');    
    

});
