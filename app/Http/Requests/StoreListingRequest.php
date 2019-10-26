<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'digital' => 'required',
            'limited_edition' => '',
            'delivery' => '',
            'sell_negotiate' => '',
            'trade' => '',
            'trade_negotiate' => '',
            'trade_list' => 'required',
            'sell' => '',
            'delivery_price' => 'required',
            'payment' => 'required',
            'img' => 'required',
        ];
    }
}
