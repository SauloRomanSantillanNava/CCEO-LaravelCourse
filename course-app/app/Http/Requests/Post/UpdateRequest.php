<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:500',
            'slug' => [
                'required',
                'min:5',
                'max:500',
                Rule::unique('posts')->ignore($this->post->id)
            ],
            'content' => 'required|min:7',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required|min:7',
            'posted' => 'required|in:yes,no',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:10240'
        ];
    }
}
