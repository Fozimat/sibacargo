<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPostinganRequest extends FormRequest
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
        return [
            'id_kategori' => 'required',
            'penulis' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_posting' => 'required',
            'gambar' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
