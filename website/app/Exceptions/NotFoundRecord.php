<?php

namespace App\Exceptions;

use App\Helper\Helper;
use Exception;

class NotFoundRecord extends Exception
{
    public function render()
    {
        return abort(Helper::HTTP_ERROR);
    }
}
