<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule_article_unique = Rule::unique('articles', 'title');
        if ($this->method() !== 'POST') {
            $rule_article_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'title' => ['required', $rule_article_unique],
            'synopsis' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ];
    }

    public function messages () 
    {
        return [
            'required' => 'This column must be filled',
            'image' => 'This image must contain with JPG'
        ];
    }
}
