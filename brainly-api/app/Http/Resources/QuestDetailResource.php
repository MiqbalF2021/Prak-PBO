<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title'=> $this->title,
            'question' => $this->question,
            'author' => $this->author,
            'created_at' => date_format($this->created_at,"Y/m/d H:i:s"),
            'writer' => $this->whenLoaded('writer'),
            'answers' => $this->whenLoaded('answer', function(){
                return collect($this->answer)->each(function ($answer){
                    $answer->answerer;
                    return $answer;
                });
            }),

            'answer_total' => $this->whenLoaded('answer', function(){
                return count($this->answer);
            })
        ];
    }
}
