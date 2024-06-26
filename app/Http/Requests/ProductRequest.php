<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "name" => "required|string|max:255",
            "description" => "required|string|min:2|max:500",
            "price" => "required|decimal:0,2",
            "img" => "image"
        ];
    }   public function messages(){
        return[
            "title.required" => "Campo obligatorio",
            "title.max" => "Titolo tropo lungo",
            "description.required" => "Campo obligatorio",
            "price.required" => "Campo obligatorio"
        ];
    }
}

