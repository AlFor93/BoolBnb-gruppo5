<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlatRequest extends FormRequest
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
          'flat_name' => 'required|string|max:50',
          'number_of_rooms' =>'required|numeric',
          'mq' => 'required|numeric',
          'address' => 'required|string',
          'city' => 'required|string',
          'flat_price' => 'required|numeric',
          'user_id' => '',
          'services'=> ''
        ];
    }

    public function messages()
    {
      return [
        'flat_name.required' => 'flat name is required',
        'number_of_rooms.requred' =>'number of room is required',
        'mq.requred' => 'mq is required',
        'address.requred' => 'address is required',
        'city.requred' => 'city is required',
        'flat_price.requred' => 'price is required',
        'user_id' => '',
        'services'=> ''
      ];
    }
}
