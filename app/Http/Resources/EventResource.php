<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class EventResource extends JsonResource
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
            'title' => $this->title,
            'date' => $this->date instanceof Carbon ? $this->date->format('Y-m-d') : null,
            'description' => $this->description,
            'location' => $this->location,
            'category_id' => $this->category_id,
            'category'=>$this->category->name,
        ];
    }
}
