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
        $roles = Role::all();

        $page_with_role = Page::with('roles')->get()->map(function ($item) use($roles) {
            $element = [];
            $element['id'] = $item['id'];
            $element['name'] = $item['name'];
            $available_role = collect($item['roles'])->pluck('name')->implode(',');
            foreach($roles as $role) {
                $element[$role['name']] = strpos($available_role, $role->name) === false ? false: true;
            }
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
            'page_with_role' => $page_with_role,
            'menus' => $menus
        );

        return view('nitseditor::welcome', [ 'nitseditor' => json_encode($nitseditor)]);
    }
}
