<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        $rules = [
          'product_name'  => 'required|max:120',
          'category_id'   => 'required|integer',
          'product_preview' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
        $fileToUpload = count($this->input('fileToUpload'));
        foreach(range(0, $fileToUpload) as $index) {
            $rules['fileToUpload.' . $index] = 'image|mimes:jpeg,bmp,png';
        }
        return $rules;
    }
}
