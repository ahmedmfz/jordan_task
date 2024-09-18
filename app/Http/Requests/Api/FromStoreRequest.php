<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\BaseApiRequest;

class FromStoreRequest extends BaseApiRequest
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
            'national_number'          => 'required|numeric',
            'date_of_birth'            => 'required|date',
            'full_name_english'        => 'required',
            'full_name_arabic'         => 'required',
            'national_id'              => 'required|numeric',
            'governmental_entity'      => 'required',
            'landline_number'          => 'required|numeric',
            'id_of_government_agency'  => 'required|numeric',
            'international_code'       => 'required|numeric',
            'phone_number'             => 'required|numeric',
            'email'                    => 'required|email',
            'documents_upload'         =>  'required|max:5120' 
        ];
    }
}
