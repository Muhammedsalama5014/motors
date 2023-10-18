<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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

    public function rules()
    {
        switch($this->method()){
            case "POST":{
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$this->id,
                    'password' => 'required|string|min:6|max:20',
                   

                ];
            } case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|string|min:6|max:20',
                    

                ];
            }
            default:break;

        }


    }


    public function messages()
    {
        return[
          
            'name.required'=>trans('validation.required'),
            
            'email.required'=>trans('validation.required'),
            'email.unique'=>trans('validation.unique'),
            'password.required'=>trans('validation.required'),
            'password.min'=>trans('validation.min'),
           

       

        ];
    } 
}
