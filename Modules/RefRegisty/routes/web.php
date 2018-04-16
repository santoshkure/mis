<?php

Route::group(['module' => 'RefRegisty', 'middleware' => ['web'], 'namespace' => 'App\Modules\RefRegisty\Controllers'], function() {

    Route::resource('refrence', 'RefRegistyController');

});
