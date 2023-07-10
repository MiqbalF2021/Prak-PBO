<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'is_answer' => $this->is_answer,
            'user_id' => $this->user_id,
            'answerer' => $this->whenLoaded('answerer'),
            'created_at' => date_format($this->created_at,"Y/m/d H:i:s"),
        ];
    }
}
