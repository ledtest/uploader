<?php

use Encore\Uploader\Http\Controllers\UploaderController;

Route::get('uploader', UploaderController::class.'@index');