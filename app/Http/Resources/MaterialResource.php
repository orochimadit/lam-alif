<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'category'      => $this->category_id,
            'category_name'   => $this->category->name,
            'img'           => $this->img,
            'sound'         => $this->sound,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];

    }
}
