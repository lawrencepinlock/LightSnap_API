<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
class EventImagesStoreRequest extends FormRequest
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
        if (request()->isMethod('')){
            return [
             'event_id' => 'required|exists:events,id',
             'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
            ];
        } else {
            return[
                'event_id' => 'required|exists:events,id',
                'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'       
            ];
        }

    }


    public function messages()
    {
        if (request() ->isMethod('event_images')){
            return [
                'event_id.required' => 'Event id is required!',
                'image_path.required' => 'Image path is required!'
            ];
        } else {
            return [
                'event_id.required' => 'Event id is required!',
                'image_path.required' => 'Image path is required!'  
            ];
        }

    }
}
