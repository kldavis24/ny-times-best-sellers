<?php

namespace App\Http\Requests\BestSellers;

use Illuminate\Validation\Rule;
use App\Services\BestSellersBooks\Enums\ListName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

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
            'list_name' => $this->route('list_name'),
            'published_date' => $this->route('published_date')
        ]);
    }

    public function rules(): array
    {
        return [
            'list_name' => ['required', Rule::enum(ListName::class)],
            'published_date' => ['required', Rule::date()->format('Y-m-d'),]
        ];
    }

    public function listName(): ListName
    {
        return ListName::tryFromMixed($this->list_name);
    }

    public function publishedDate(): ?Carbon
    {
        return Carbon::make($this->published_date);
    }
}
