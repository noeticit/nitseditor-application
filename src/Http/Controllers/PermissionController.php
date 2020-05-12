<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nitseditor\Application\Http\Requests\PermissionUpdateRequest;
use Nitseditor\Application\Models\Page;

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
        })->all();

        $database_routes = collect(Page::get())->diff(collect($available_routes))->all();

        $difference = collect($available_routes)->diff($database_routes)->map(function ($item) {
            $data['name'] = $item['name'];
            $data['created_at'] = now();
            $data['updated_at'] = now();

            return $data;
        });

        $create_non_available_routes = Page::insert(collect($difference)->all());

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

        return response()->json(['pages' => $page_with_role], 200);
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
        $page->roles()->sync(collect($request->roles)->pluck('id'));

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
