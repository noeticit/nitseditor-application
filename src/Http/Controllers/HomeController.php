<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $nitseditor = array(
            "app_name" => config('nitseditor.app_name'),
            "app_logo" => config('nitseditor.app_logo'),
            "layout" => config('nitseditor.layout'),
            "url" => config('app.url'),
            "locale" => config('app.locale'),
            "timezone" => config('app.timezone'),
            "login_title" => config('nitseditor.login_title'),
            "copyright" => config('nitseditor.copyright'),
        );

        return view('nitseditor::welcome', [ 'nitseditor' => json_encode($nitseditor)]);
    }
}
