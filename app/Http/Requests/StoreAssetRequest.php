<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Validator;

class StoreAssetRequest extends FormRequest
{ 
 

    public function rules()
    {
        return [
           
            'name'=> 'required|string',
            'detail'          => [
                'string',
                'required',
            ],
           
        ];
    }
}
