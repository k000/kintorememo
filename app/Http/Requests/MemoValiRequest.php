<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoValiRequest extends FormRequest
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


    public function messages()
    {
        return [
            'event.max' => '部位は25文字まで入力可能です',
            'place.max' => '場所は25文字まで入力可能です',
            'memo.max' => 'メモは1000文字まで入力可能です。'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event' => 'max:25',
            'place' => 'max:25',
            'memo' => 'max:1000',
        ];
    }
}
