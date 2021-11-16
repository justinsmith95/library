<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckoutsResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Checkouts',
            'attributes' => [
            'book_id' => $this->book_id,
            'cardholder_id' => $this->cardholder_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
            ]
        ];
    }
}
