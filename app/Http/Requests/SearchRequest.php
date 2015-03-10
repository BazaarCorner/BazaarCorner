<?php

namespace BazaarCorner\Http\Requests;

use BazaarCorner\Http\Requests\Request;
use Illuminate\Validation\Validator;

class SearchRequest extends Request
{
    public function __construct()
    {
        $this->setErrorBag('search');
    }
    
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
            'q' => 'required'
        ];
    }
    
    public function formatErrors(Validator $validator)
    {
        return $validator->getCustomMessages();
    }
    
    public function messages()
    {
        return ['q.required' => "You can try looking for Clothing, Decor, or Travel"];
    }
}
