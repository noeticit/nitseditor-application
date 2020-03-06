<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Nitseditor\Framework\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::tree();
        $all_menu = Menu::all();
        $nitseditor = array(
            "menu" => $menus,
            "all_menu" => $all_menu,
            "app_name" => nits_config('app_name'),
            "app_logo" => nits_config('app_logo'),
            "layout" => nits_config('layout'),
            "domain_name" => nits_config('domain_name'),
            "language" => nits_config('language'),
            "timezone" => nits_config('timezone'),
            "login_title" => nits_config('login_title'),
            "login_subtitle" => nits_config('login_subtitle'),
            "copyright" => nits_config('copyright'),
        );

        return view('nitseditor::Admin.views.layout1', [ 'nitseditor' => json_encode($nitseditor)]);
    }
}
