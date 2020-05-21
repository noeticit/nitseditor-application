<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nitseditor\Application\Http\Requests\PermissionUpdateRequest;
use Nitseditor\Application\Models\Page;
use Nitseditor\Application\Models\Role;

class PermissionController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $available_routes = collect(request('routes'))->filter(function ($item) {
            return !(strpos($item['path'], "/nits-admin/") === 0);
        })->filter(function ($item) {
            return !(strpos($item['name'], "page-not-found") === 0);
        })->map(function ($item){
            return $item['name'];
        })->all();

        $pages = Page::get()->map(function ($item) {
            return $item['name'];
        });

        $database_routes = collect($available_routes)->diff(collect($pages))->all();

        $difference_to_be_deleted = collect($pages)->diff(collect($available_routes))->all();

        Page::whereIn('name', $difference_to_be_deleted)->delete();

        $difference_to_be_added = collect($database_routes)->map(function ($item) {
            $data['name'] = $item;
            $data['created_at'] = now();
            $data['updated_at'] = now();

            return $data;
        });

        $create_non_available_routes = Page::insert(collect($difference_to_be_added)->all());

        $roles = Role::all();

        $page_with_role = Page::with('roles')->get()->map(function ($item) use($roles) {
            $element = [];
            $element['id'] = $item['id'];
            $element['name'] = $item['name'];
            $available_role = collect($item['roles'])->pluck('name')->implode(',');
            foreach($roles as $role) {
                $element[$role['id']] = strpos($available_role, $role->name) === false ? false: true;
            }
            return $element;
        });

        return response()->json(['data' => $page_with_role, 'roles' => $roles], 200);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $created = Page::create($request->all());

        if($created)
            return response()->json(['data' => 'Created Successfully'], 200);
        else
            return response()->json(['data' => 'Something went wrong'], 400);
    }

    /**
     * @param Page $page
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Page $page)
    {
        return response()->json(['data' => $page], 200);
    }

    /**
     * @param PermissionUpdateRequest $request
     * @param Page $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function update(PermissionUpdateRequest $request, Page $page)
    {
        $checked = collect($request->roles)->filter(function ($item) {
            return $item['checked'];
        })->values();
        if(collect($checked)->count())
            $page->roles()->attach(collect($checked)->pluck('id'));

        $uncheked = collect($request->roles)->filter(function ($item) {
            return !$item['checked'];
        })->values();
        if(collect($uncheked)->count())
            $page->roles()->detach(collect($uncheked)->pluck('id'));

        return response('Updated', Response::HTTP_ACCEPTED);
    }


    /**
     * @param Page $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     * @throws \Exception
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
