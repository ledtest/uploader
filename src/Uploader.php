<?php

namespace Encore\Uploader;

use Encore\Admin\Extension;

class Uploader extends Extension
{
    public $name = 'uploader';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Uploader',
        'path'  => 'uploader',
        'icon'  => 'fa-gears',
    ];
}