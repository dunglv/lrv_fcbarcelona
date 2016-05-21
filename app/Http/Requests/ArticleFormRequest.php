<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleFormRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'content_comment' =>'min:6|required'
        ];
    }

    public function messages()
    {
        return [
            'content_comment.required' => 'Please not to comment is empty'
        ];
    }
}
