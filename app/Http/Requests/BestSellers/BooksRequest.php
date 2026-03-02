<?php

namespace App\Http\Requests\BestSellers;

class BooksRequest extends ListsOverviewRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->can('viewBooks') ?? false;
    }
}
