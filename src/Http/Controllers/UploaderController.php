<?php

namespace Encore\Uploader\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class UploaderController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('uploader::index'));
    }
}