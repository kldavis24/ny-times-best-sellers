<?php

namespace App\Http\Requests\BestSellers;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon as SupportCarbon;

class ListsOverviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()?->can('viewLists') ?? false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'published_date' => ['sometimes', Rule::date()->format('Y-m-d'),]
        ];
    }

    public function publishedDate(): ?Carbon
    {
        return Carbon::make($this->published_date);
    }
}
