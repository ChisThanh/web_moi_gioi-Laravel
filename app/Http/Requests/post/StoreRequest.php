<?php

namespace App\Http\Requests\post;

use App\Enums\PostCurrencySalaryEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'min_salary' => [
                'numeric'
            ],
            'max_salary' => [
                'nullable',
                'numeric',
                'gt:min_salary'
            ],
            'currency_salary' => [
                'required',
                Rule::in(PostCurrencySalaryEnum::getValues()),
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'numeric' => 'Phải là số',
            'min_salary.required' => 'Tên thông báo khi min_salary không được nhập.',
            'min_salary.lt' => 'Phải nhỏ hơn max_salary',
            // 'min_salary.numeric' => 'Tên thông báo khi min_salary phải là số.',
            'max_salary.required' => 'Tên thông báo khi max_salary không được nhập.',
            // 'max_salary.numeric' => 'Tên thông báo khi max_salary phải là số.',
            'max_salary.gt' => 'Phải lớn hơn min_salary',
            'currency_salary.in' => 'Bịp à.',
        ];
    }
}
