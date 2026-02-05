<?php

namespace App\Services\BestSellersBooks\DTO;

use Illuminate\Contracts\Support\Arrayable;

final class BestSellersList implements Arrayable
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $encoding,
    ) {
        //
    }

    public static function create(int $id, string $name, string $encoding): BestSellersList
    {
        return new self($id, $name, $encoding);
    }

    /**
     * Get the instance as an array.
     *
     * @return array<TKey, TValue>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'encoded_name' => $this->encoding,
        ];
    }
}
