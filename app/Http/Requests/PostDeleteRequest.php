<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostDeleteRequest extends FormRequest
{
    public function authorize(): bool
    {
        $postId = $this->route('id');
        $post = Post::query()->findOrFail($postId);

        if ($this->user()->id != $post->user_id) {
            return false;
        }

        return true;
    }

    public function rules(): array
    {
        return [];
    }
}
