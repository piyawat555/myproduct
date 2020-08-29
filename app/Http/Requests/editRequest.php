<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nameproduct' => 'required',
            'piceproduct' => 'required',
            'discriptionproduct'=> 'required',
            
        ];
        
        if($this->file('photos')==null){
            return $rules;
        }else{
           $photos = count($this->file('photos'));
        
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index]  = 'image|mimes:jpeg,bmp,png|max:2000';
        } 
        return $rules;
        }
        

        
    }
}
