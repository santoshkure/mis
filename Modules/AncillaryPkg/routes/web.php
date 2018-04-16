<?php

Route::group(['module' => 'AncillaryPkg', 'middleware' => ['web'], 'namespace' => 'App\Modules\AncillaryPkg\Controllers'], function() {

    Route::resource('ancillary', 'AncillaryPkgController');

});
