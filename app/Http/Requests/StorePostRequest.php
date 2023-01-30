<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // $validator = Validator::make($request->all(), [
                    'kategori'=>'required',
                    'nama'=>'required',
                    'deskripsi'=>'required', 
                    'harga'=>'required', 
                    // 'gambar'=>'required'
                    
                      
                //     if ($validator->fails()) {
                //       return redirect('/')
                //               ->withErrors($validator)
                //               ->withInput();
                //   }
        ];
    }
}
