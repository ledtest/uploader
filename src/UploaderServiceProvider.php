<?php

namespace Encore\Uploader;

use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class UploaderServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Uploader $extension)
    {
        if (! Uploader::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'uploader');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/uploader')],
                'uploader'
            );
        }

        $this->app->booted(function () {
            Uploader::routes(__DIR__.'/../routes/web.php');
        });
        Admin::js([
            'vendor/laravel-admin-ext/uploader/js/aetherupload.admin.js'
            ,'vendor/laravel-admin-ext/uploader/js/bootstrap.file-input.js'
            ,'vendor/laravel-admin-ext/uploader/js/spark-md5.min.js'
        ]);
    }
}