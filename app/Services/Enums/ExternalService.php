<?php

namespace App\Services\Enums;

enum ExternalService: string
{
    case NewYorkTimesBooks = 'nyt_books';

    public function id(): int
    {
        return match ($this) {
            self::NewYorkTimesBooks => 1
        };
    }
}
