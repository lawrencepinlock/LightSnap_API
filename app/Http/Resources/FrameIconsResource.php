<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FrameIconsResource extends JsonResource
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
            'id' => $this->id ,
            'mode' => $this-> mode,
            'event_name' => $this-> event_name,
            'icon_path' => $this-> icon_path
        ];
    }
}
