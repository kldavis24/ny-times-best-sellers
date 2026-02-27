<?php

namespace App\Http\Resources\BestSellers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $book = $this->resource->toArray();

        return [
            'title' => data_get($book, 'title'),
            'author' => data_get($book, 'author'),
            'publisher' => data_get($book, 'publisher'),
            'description' => data_get($book, 'description'),
            'rank' => data_get($book, 'rank'),
            'weeks_on_list' => data_get($book, 'weeks_on_list'),
            'isbns' => data_get($book, 'isbns', []),
        ];
    }
}
