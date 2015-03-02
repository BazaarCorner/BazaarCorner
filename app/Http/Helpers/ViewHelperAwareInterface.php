<?php

namespace BazaarCorner\Http\Helpers;

use Illuminate\View\View;

interface ViewHelperAwareInterface
{
    public function composeView(View $view);
}
