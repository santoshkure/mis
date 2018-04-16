<?php

Route::group(['module' => 'SoftComp', 'middleware' => ['api'], 'namespace' => 'App\Modules\SoftComp\Controllers'], function() {

    Route::resource('SoftComp', 'SoftCompController');

});
