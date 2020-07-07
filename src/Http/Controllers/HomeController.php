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

        return view('nitseditor::welcome', ['nitseditor' => json_encode($nitseditor)]);
    }


//    public function uploadFile(Request $request)
//    {
////        $data = $request->file_name;
////        $data = $request->link;
////        $created = File::create($data);
//
//        $created = collect($request->data)->map(function ($item) {
//            $ele = [];
//            $ele['file_name'] = $item['file_name'];
//            $data['file_link'] = $item['file_link'] ? document_s3_upload('upload/' . $item['name'] . '/file_link', $item['file_link'], $item['file_name']) : null;
//            return File::create($ele);
//        });
//        if ($created)
//            return response()->json(['data' => 'Created Successfully'], 200);
//        else
//            return response()->json(['data' => 'Something went wrong'], 400);
//    }

    public function upload()
    {
        return response()->json(['link' => nits_binary_file_s3_upload()], 200);

    }
}
