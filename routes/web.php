<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','UserController@home')->name('/');

Auth::routes();
Route::group(['middleware' => auth::class],function(){
    Route::get('register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //add
    Route::get('AddBagPage','HomeController@AddBagPage')->name('AddBagPage');
    Route::post('addBag','HomeController@addBag')->name('addBag');
    //delete
    Route::get('deleteBag/{id}','HomeController@deleteBag')->name('deleteBag');
    //edit
    Route::get('editPage/{id}','HomeController@editPage')->name('editPage');
    Route::post('editBag','HomeController@editBag')->name('editBag');


    //accessory LIst
    Route::get('accList','HomeController@accList')->name('accList');
    //add
    Route::get('addAccessoryPage','HomeController@addAccessoryPage')->name('addAccessoryPage');
    Route::post('addAccessory','HomeController@addAccessory')->name('addAccessory');

    //delete
    Route::get('deleteAcc/{id}','HomeController@deleteAcc')->name('deleteAcc');

    //edit
    Route::get('editAccPage/{id}','HomeController@editAccPage')->name('editAccPage');
    Route::post('editAcc','HomeController@editAcc')->name('editAcc');

    //add New Accessory Type
    Route::get('addNewTypePage','HomeController@addNewTypePage')->name('addNewTypePage');
    Route::post('addNewType','HomeController@addNewType')->name('addNewType');

    //delete Type
    Route::get('deleteType/{id}','HomeController@deleteType')->name('deleteType');

    //edit type
    Route::get('editTypePage/{id}','HomeController@editTypePage')->name('editTypePage');
    Route::post('editType','HomeController@editType')->name('editType');

    //hat list
    Route::get('hatList','HomeController@hatList')->name('hatList');

    //add hat
    Route::get('AddHatPage','HomeController@AddHatPage')->name('AddHatPage');
    Route::post('addHat','HomeController@addHat')->name('addHat');

    //delete Hat
    Route::get('deleteHat/{id}','HomeController@deleteHat')->name('deleteHat');

    //Edit Hat
    Route::get('editHatPage/{id}','HomeController@editHatPage')->name('editHatPage');
    Route::post('editHat','HomeController@editHat')->name('editHat');
});
//bag only Page
Route::get('bagOnly','UserController@bagOnly')->name('bagOnly');

//accessory only page
Route::get('acceOnly','UserController@acceOnly')->name('acceOnly');

//hat only
Route::get('hatOnly','UserController@hatOnly')->name('hatOnly');

//bag Size
Route::get('bagSize/small','UserController@bagSize')->name('bagSize/small');
Route::get('bagSize/medium','UserController@bagSizeM')->name('bagSize/medium');
Route::get('bagSize/large','UserController@bagSizeL')->name('bagSize/large');


//accessory type
Route::get('acceType/{type}','UserController@acceType')->name('acceType');


//searchData
Route::post('searchData','UserController@searchData')->name('searchData');

//detail
Route::get('detailBag/{id}','UserController@detailBag')->name('detailBag');
Route::get('detailAcc/{id}','UserController@detailAcc')->name('detailAcc');
Route::get('detailHat/{id}','UserController@detailHat')->name('detailHat');
