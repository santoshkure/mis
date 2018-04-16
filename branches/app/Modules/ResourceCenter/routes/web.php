<?php

Route::group(['module' => 'ResourceCenter', 'middleware' => ['web'], 'namespace' => 'App\Modules\ResourceCenter\Controllers'], function() {

    Route::resource('resource', 'ResourceCenterController');

});
