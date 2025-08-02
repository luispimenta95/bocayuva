<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlideRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'images' => 'required|array|min:1|max:10', // Mínimo 1, máximo 10 imagens
            'images.*' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048', // Máx. 2MB cada
        ];
    }

    /**
     * Custom error messages
     */
    public function messages(): array
    {
        return [
            'images.required' => 'Pelo menos uma imagem deve ser selecionada.',
            'images.array' => 'O formato das imagens é inválido.',
            'images.min' => 'Pelo menos uma imagem deve ser selecionada.',
            'images.max' => 'Máximo de 10 imagens por upload.',
            'images.*.required' => 'Todas as imagens são obrigatórias.',
            'images.*.image' => 'Todos os arquivos devem ser imagens.',
            'images.*.mimes' => 'Formato não suportado. Use apenas: JPG, PNG, GIF ou WebP.',
            'images.*.max' => 'Cada imagem deve ter no máximo 2MB.',
        ];
    }
}
