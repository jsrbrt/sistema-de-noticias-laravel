<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'imagem' => 'nullable|string|max:255',
            'autor' => 'required|string|max:255'
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.max' => 'O título não pode ter mais de 255 caracteres.',
            'subtitulo.required' => 'O subtítulo é obrigatório.',
            'subtitulo.max' => 'O subtítulo não pode ter mais de 255 caracteres.',
            'texto.required' => 'O texto é obrigatório.',
            'autor.required' => 'O autor é obrigatório.',
            'autor.max' => 'O nome do autor não pode ter mais de 255 caracteres.',
            'imagem.max' => 'O caminho da imagem não pode ter mais de 255 caracteres.'
        ];
    }
}