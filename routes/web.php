<?php



Route::prefix('admin')->group(function(){
    Auth::routes();

    Route::any('sendToken' , 'BackEnd\ConfigrationController@sendToken')->name('forget.password');
    Route::any('paswordreset/{id}/{token}' , 'BackEnd\ConfigrationController@paswordreset');
    // Route::post('login', 'BackEnd\UserController@login');
    Route::middleware('auth')->namespace('BackEnd')->group(function () {

        Route::get('/', 'ConfigrationController@index');
        Route::resource('configrations', 'ConfigrationController');
        Route::resource('users', 'UserController');      
        Route::resource('news', 'NewsController');
        Route::resource('partners', 'PartnerController');
        Route::resource('services', 'ServiceController');
        Route::resource('galleries', 'GalleryController');   
        Route::resource('complaints', 'ComplaintController');  
        Route::resource('videos', 'VideoController'); 
    });
});
Route::get('/', 'HomeController@home')->name('home');
Route::get('news/{newsId?}', 'HomeController@news')->name('news');
Route::get('news/{newsId?}', 'HomeController@news')->name('news');
Route::any('about-us', 'HomeController@aboutUs')->name('aboutUs');
Route::any('contact-us', 'HomeController@contactUs')->name('contactUs');