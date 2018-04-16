<?php

Route::group(['module' => 'ResourceCenter', 'middleware' => ['api'], 'namespace' => 'App\Modules\ResourceCenter\Controllers'], function() {

    Route::resource('ResourceCenter', 'ResourceCenterController');

});
