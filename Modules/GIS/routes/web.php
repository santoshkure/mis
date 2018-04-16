<?php

Route::group(['module' => 'GIS', 'middleware' => ['web'], 'namespace' => 'App\Modules\GIS\Controllers'], function() {

    Route::resource('gis', 'GISController');

});
