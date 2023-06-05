<?php

namespace App\Http\Resources;

use App\Enums\UserID;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $fields = $this->getAttributes();
        return array_merge($fields, [
            'user_info' => UserID::getLabel($this->user_id),
            'classes' => UserID::getClass($this->id)
        ]);
    }
}
