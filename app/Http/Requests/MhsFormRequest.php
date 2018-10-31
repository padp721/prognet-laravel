<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MhsFormRequest extends FormRequest
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
            //
            'nim' => 'digits:10',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl' => 'required',
            'agama' => 'required',
            'jk' => 'required'

        ];
    }
}
