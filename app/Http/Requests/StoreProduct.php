<?php

namespace App\Http\Requests;

use App\Support\Validable\FormRequestIsValidable;
use App\Support\Validable\ValidableContract;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreProduct
 * @package App\Http\Requests
 */
class StoreProduct extends FormRequest implements ValidableContract
{
    use FormRequestIsValidable;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'unique:products', 'max:255'],
            'price' => ['required', 'numeric'],
        ];
    }
}
