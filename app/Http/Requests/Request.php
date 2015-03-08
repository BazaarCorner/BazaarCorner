<?php

namespace BazaarCorner\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function setErrorBag($name)
    {
        $this->errorBag = $name;
    }
}
