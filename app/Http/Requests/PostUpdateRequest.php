<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        $userId = $this->user()->id;
        $postUserId = $this->get('user_id');
        \Log::info('PostUpdateRequest');
        \Log::info($userId);
        \Log::info($postUserId);
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'exists:categories,id',
            'title' => 'string',
            'description' => 'string',
        ];
    }
}
