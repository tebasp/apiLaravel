<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    // Da formato a cada Post, segun PostResource
    public $collects = PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection, // Obligatorio, trae la consulta
            'meta' => [
                'organization' => 'Platzi',
                'author' =>  'Shaggy',
            ],
            'type' => 'articles',
        ];
    }
}
