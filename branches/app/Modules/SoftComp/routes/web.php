<?php

Route::group(['module' => 'SoftComp', 'middleware' => ['web'], 'namespace' => 'App\Modules\SoftComp\Controllers'], function() {

    Route::resource('soft', 'SoftCompController');

});
