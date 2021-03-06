<?php namespace BazaarCorner\Http\Requests;

use BazaarCorner\Http\Requests\Request;

class SiteSubscriptionRequest extends Request
{
    public function __construct()
    {
        $this->setErrorBag('subscription');
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
            'subscription_email' => 'required|email|unique:subscribers,email'
        ];
    }
}
