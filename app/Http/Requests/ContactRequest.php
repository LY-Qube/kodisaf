<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactRequest
 * @property string name
 * @property string email
 * @property string phone
 * @package App\Http\Requests
 */
class ContactRequest extends FormRequest
{
    /**
     * The URI to redirect to if validation fails.
     *
     * @var string
     */
    protected $redirect = "?#contact";

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => "required|string|min:3|max:20",
            'email' => "nullable|string|email|max:255",
            'phone' => "required|string|min:8|max:20"
        ];
    }

    /**
     * Translate errors messages
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le champ Nome et prénom est obligatoire.',
            'name.min' => 'Le champ Nome et prénom doit comporter au moins plus de :min caractères.',
            'name.max' => "Le champ Nome et prénom ne doit pas être supérieur à :max caractères.",
            'name.string' => 'Le champ Nome et prénom doit être une chaîne.',
            'email.required' => 'Le champ Adresse E-mail est obligatoire.',
            'email.min' => 'Le champ Adresse E-mail doit comporter au moins plus de :min caractères.',
            'email.max' => "Le champ Adresse E-mail ne doit pas être supérieur à :max caractères.",
            'email.string' => 'Le champ Adresse E-mail doit être une chaîne.',
            'phone.required' => 'Le champ Téléphone est obligatoire.',
            'phone.min' => 'Le champ Téléphone doit comporter au moins plus de :min caractères.',
            'phone.max' => "Le champ Téléphone ne doit pas être supérieur à :max caractères.",
            'phone.string' => 'Le champ Téléphone doit être une chaîne.',
        ];
    }
}
