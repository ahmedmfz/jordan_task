<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\FromStoreRequest;
use App\Models\Form;
use Illuminate\Foundation\Providers\FormRequestServiceProvider;
use Illuminate\Http\Request;

class FormController extends Controller
{
     
    public function store(FromStoreRequest $fromStoreRequest)
    {
        Form::create([
            'national_number'          => $fromStoreRequest->national_number,
            'date_of_birth'            => $fromStoreRequest->date_of_birth,
            'name'                     => ['en' => $fromStoreRequest->full_name_english, 
                                            'ar' => $fromStoreRequest->full_name_arabic],
            'national_id'              => $fromStoreRequest->national_id,
            'governmental_entity'      => $fromStoreRequest->governmental_entity,
            'landline_number'          => $fromStoreRequest->landline_number,
            'id_of_government_agency'  => $fromStoreRequest->id_of_government_agency,
            'international_code'       => $fromStoreRequest->international_code,
            'phone_number'             => $fromStoreRequest->phone_number,
            'email'                    => $fromStoreRequest->email,
            'documents_upload'         => $fromStoreRequest->documents_upload->hashName()
        ]);
        
        return response()->json(['status'=>true,'message' => 'form saved successfully']);
    }
    
}
