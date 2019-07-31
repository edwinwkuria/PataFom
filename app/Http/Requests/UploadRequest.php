<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        return [
        'eventname'=> 'required',
        'eventlocation'=> 'required',
        'eventcost'=> 'required',
        'eventtime'=> 'max:255',
        'eventdate'=> 'max:255',
        'eventdescription'=> 'required',
        'eventorganizer'=> 'required',
        'eventcontactemail'=> 'required',
        'eventcontactphone'=> 'required',
        'photo' =>'image|mimes:jpeg,bmp,png|max:2000'
        ];
    }
}
