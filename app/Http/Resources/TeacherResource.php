<?php

namespace App\Http\Resources;

use App\Enums\UserID;
use App\Models\Review;
use App\Models\Teacher;
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
        $vote = 0;
        $comments = Review::where('teacher_id', $this->id);
        if($comments) {
            $vote = $comments->avg('rating');
        }
        $fields = $this->getAttributes();
        return array_merge($fields, [
            'vote' => $vote,
            'user_info' => UserID::getLabel($this->user_id),
            'classes' => UserID::getClass($this->id)
            
        ]);
    }
}
