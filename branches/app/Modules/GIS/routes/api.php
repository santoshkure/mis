<?php

Route::group(['module' => 'GIS', 'middleware' => ['api'], 'namespace' => 'App\Modules\GIS\Controllers'], function() {

    Route::resource('GIS', 'GISController');

});
