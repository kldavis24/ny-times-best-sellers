<?php

namespace App\Services\BestSellersBooks\DTO;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @implements Arrayable<string, mixed>
 */
final class BestSellersList implements Arrayable
{
    public function __construct(private readonly array $listData)
    {
        //
    }

    public static function create(array $listData): BestSellersList
    {
        return new self($listData);
    }

    /**
     * Get the instance as an array.
     *
     * @return array{
     *     id: mixed,
     *     name: mixed,
     *     encoding: mixed
     * }
     */
    public function toArray(): array
    {
        return [
            'id' => data_get($this->listData, 'list_id'),
            'name' => data_get($this->listData, 'list_name'),
            'encoding' => data_get($this->listData, 'list_name_encoded'),
        ];
    }
}
