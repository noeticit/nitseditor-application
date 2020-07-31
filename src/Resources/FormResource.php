<?php
namespace Nitseditor\Application\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->form_title,
        ];
    }
}
