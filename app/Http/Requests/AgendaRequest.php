<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
{
    protected $redirectRoute = 'agenda.especialidades';
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
                'profissional_id' => 'required|integer',
                'specialty_id' => 'required|integer',
                'name' => 'required|string',
                'cpf' => 'required|string',
                'source_id' => 'required|integer',
                'birthdate' => 'required|date'
        ];
    }
}
