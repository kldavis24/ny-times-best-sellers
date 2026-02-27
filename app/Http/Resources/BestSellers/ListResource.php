<?php

namespace App\Http\Resources\BestSellers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $list = $this->resource->toArray();

        return [
            'id' => data_get($list, 'list_id'),
            'name' => data_get($list, 'list_name'),
            'encoding' => data_get($list, 'list_name_encoded'),
        ];
    }
}
