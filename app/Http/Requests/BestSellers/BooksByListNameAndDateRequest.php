<?php

namespace App\Http\Requests\BestSellers;

use Illuminate\Validation\Rule;
use App\Services\BestSellersBooks\Enums\ListName;
use Illuminate\Foundation\Http\FormRequest;

class BooksByListNameAndDateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->can('viewBooksByListAndDate') ?? false;
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
            'list' => ['required', Rule::enum(ListName::class)],
            'published_date' => ['required', Rule::date()->format('Y-m-d'),]
        ];
    }

    public function list(): ListName
    {
        return ListName::tryFromMixed($this->list);
    }

    public function publishedDate(): string
    {
        return $this->published_date;
    }
}
