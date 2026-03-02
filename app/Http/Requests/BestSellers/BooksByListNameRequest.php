<?php

namespace App\Http\Requests\BestSellers;

use App\Services\BestSellersBooks\Enums\ListName;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BooksByListNameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->can('viewBooksByList') ?? false;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'list_name' => $this->route('list_name'),
        ]);
    }

    public function rules(): array
    {
        return [
            'list_name' => ['required', Rule::enum(ListName::class)],
        ];
    }

    public function listName(): ListName
    {
        return ListName::tryFromMixed($this->list_name);
    }
}
