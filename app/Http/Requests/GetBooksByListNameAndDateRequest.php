<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Services\BestSellersBooks\Enums\BookList;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class GetBooksByListNameAndDateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'list' => $this->route('list'),
            'published_date' => $this->route('date')
        ]);
    }

    public function rules(): array
    {
        return [
            'list' => ['required', Rule::enum(BookList::class)],
            'published_date' => ['required', Rule::date()->format('Y-m-d'),]
        ];
    }

    public function list(): BookList
    {
        return BookList::tryFromMixed($this->list);
    }

    public function publishedDate(): string
    {
        return $this->published_date;
    }
}
