<?php

namespace App\Services\BestSellersBooks\DTO;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @implements Arrayable<string, mixed>
 */
final class BookList implements Arrayable
{
    public function __construct(private readonly array $listData)
    {
        //
    }

    public static function create(array $listData): BookList
    {
        return new self($listData);
    }

    /**
     * Get the instance as an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->listData;
    }
}
