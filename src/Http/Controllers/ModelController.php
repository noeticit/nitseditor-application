<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nitseditor\Application\Http\Requests\ModelCreateRequest;
use Nitseditor\Application\Http\Requests\ModelUpdateRequest;
use Nitseditor\Application\Models\Model;
use Nitseditor\Application\Resources\ModelResource;

class ModelController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return ModelResource::collection(
            Model::when( $request->search , function($q) use( $request){
                $q->where('name' ,'like','%'.$request->search.'%');
            })->paginate(10)
        );
    }


    public function store(ModelCreateRequest $request)
    {
        $name = ucfirst(strtolower($request->name));

        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            get_nitseditor_stub('ModelNew')
        );

        file_put_contents(base_path("app/Models/{$name}.php"), $modelTemplate);

        $created = Model::create([
            'name' => $name,
        ]);

        if($created)
            return response()->json(['data' => 'Created Successfully'], 200);
        else
            return response()->json(['data' => 'Something went wrong'], 400);
    }


    public function show(Model $model)
    {
        return response()->json(['data' => $model], 200);
    }


    public function update(ModelUpdateRequest $request, Model $model)
    {

        $name = ucfirst(strtolower($request->name));

        if(file_exists(base_path("app/Models/{$name}.php"))) {
            File::delete(base_path("app/Models/{$name}.php"));
        }
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            get_nitseditor_stub('ModelNew')
        );

        file_put_contents(base_path("app/Models/{$name}.php"), $modelTemplate);

        $model->update($request->all());

        return response('Updated', Response::HTTP_ACCEPTED);
    }


    public function destroy(Model $model)
    {
        $model->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
