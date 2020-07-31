<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nitseditor\Application\Http\Requests\FormCreateRequest;
use Nitseditor\Application\Http\Requests\FormUpdateRequest;
use Nitseditor\Application\Models\Form;
use Nitseditor\Application\Resources\FormResource;

class FormController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return FormResource::collection(
            Form::when( $request->search , function($q) use( $request){
                $q->where('form_title' ,'like','%'.$request->search.'%');
            })->paginate(10)
        );
    }

    /**
     * @param FormCreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(FormCreateRequest $request)
    {
        $created = Form::create($request->all());

        if($created)
            return response()->json(['data' => 'Created Successfully'], 200);
        else
            return response()->json(['data' => 'Something went wrong'], 400);
    }

    /**
     * @param Form $form
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Form $form)
    {
        return response()->json(['data' => $form], 200);
    }

    /**
     * @param FormUpdateRequest $request
     * @param Form $form
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function update(FormUpdateRequest $request, Form $form)
    {
        $form->save($request->all());

        return response('Updated', Response::HTTP_ACCEPTED);
    }


    /**
     * @param Form $form
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     * @throws \Exception
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
