<?php

namespace App\Services\BestSellersBooks\DTO;

use Illuminate\Contracts\Support\Arrayable;

final class Book implements Arrayable
{
    public function __construct(private readonly array $bookData)
    {
        //
    }

    public static function create(array $bookData): Book
    {
        return new self($bookData);
    }

    /**
     * Get the instance as an array.
     *
     * @return array<TKey, TValue>
     */
    public function toArray(): array
    {
        return [
            'title' => data_get($this->bookData, 'title'),
            'author' => data_get($this->bookData, 'author'),
            'publisher' => data_get($this->bookData, 'publisher'),
            'description' => data_get($this->bookData, 'description'),
            'rank' => data_get($this->bookData, 'rank'),
            'weeks_on_list' => data_get($this->bookData, 'weeks_on_list'),
            'isbns' => data_get($this->bookData, 'isbns', [])
        ];
    }
}
