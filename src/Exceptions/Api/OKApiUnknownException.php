<?php

namespace Vadimushka\OK\Exceptions\Api;

use Vadimushka\OK\Client\OkApiError;
use Vadimushka\OK\Exceptions\OkApiException;

class OKApiUnknownException extends OkApiException
{

    public function __construct(OkApiError $error)
    {
        parent::__construct(1, 'Unknown error occurred', $error);
    }

}
