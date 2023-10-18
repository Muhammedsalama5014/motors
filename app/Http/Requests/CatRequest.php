<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
        switch($this->method()){
            case "POST":{
                return [
                    'name_ar' => 'required',
                    'name_en' => 'required',
                 

                ];
            } case 'PUT':
            case 'PATCH': {
                return [
                    'name_ar' => 'required',
                   'name_en' => 'required',
                    

                ];
            }
            default:break;

        }


    }


    public function messages()
    {
        return[
          
            'name_ar.required'=>trans('validation.required'),
            
            'name_en.required'=>trans('validation.required'),
           

       

        ];
    } 

}
