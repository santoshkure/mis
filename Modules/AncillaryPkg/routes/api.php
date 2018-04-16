<?php

Route::group(['module' => 'AncillaryPkg', 'middleware' => ['api'], 'namespace' => 'App\Modules\AncillaryPkg\Controllers'], function() {

    Route::resource('AncillaryPkg', 'AncillaryPkgController');

});
