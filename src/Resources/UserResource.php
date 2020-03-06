<?php
namespace Nitseditor\Application\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'access' => $this->access_for_version_two,
            'role' => $this->roleName->name,
            'permissions' => collect($this->roleName->pages)->pluck('name')->map(function ($item) {
                return [
                    $item, 'view'
                ];
            })->toArray()
        ];
    }
}
