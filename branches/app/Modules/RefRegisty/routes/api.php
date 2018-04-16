<?php

Route::group(['module' => 'RefRegisty', 'middleware' => ['api'], 'namespace' => 'App\Modules\RefRegisty\Controllers'], function() {

    Route::resource('RefRegisty', 'RefRegistyController');

});
