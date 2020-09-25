<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Nitseditor\Application\Models\Menu;
use Nitseditor\Application\Models\Page;
use Nitseditor\Application\Models\Role;

class HomeController extends Controller
{
    public function index()
    {
        $guest_permissions = Page::whereDoesntHave('roles')->get()->map(function ($item) {
            $element = [];
            $element['id'] = $item['id'];
            $element['name'] = $item['name'];
            $element['path'] = $item['path'];

            return $element;
        });

        $menus = Menu::tree();

        $nitseditor = array(
            "app_name" => config('nitseditor.app_name'),
            "app_logo" => config('nitseditor.app_logo'),
            "layout" => config('nitseditor.layout'),
            "url" => config('app.url'),
            "locale" => config('app.locale'),
            "timezone" => config('app.timezone'),
            "login_title" => config('nitseditor.login_title'),
            "copyright" => config('nitseditor.copyright'),
            'guest_permissions' => $guest_permissions,
            'menus' => $menus
        );

        return view('nitseditor::welcome', [
            'nitseditor' => json_encode($nitseditor),
            'title' => config('nitseditor.title'),
            'description' => config('nitseditor.description'),
            'favicon' => config('nitseditor.favicon'),
            'favicon_image_type' => config('nitseditor.favicon_image_type'),
            'favicon_sizes' => collect(config('nitseditor.favicon_sizes'))->join(' '),
            'keywords' => config('nitseditor.keywords'),
            'apple-touch-icon' => config('nitseditor.apple-touch-icon')
        ]);
    }


    public function upload()
    {
        return response()->json(['link' => nits_binary_file_s3_upload()], 200);

    }
}
