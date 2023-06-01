<?php

namespace OK\Exceptions\Api;

use OK\Client\OkApiError;
use OK\Exceptions\OkApiException;

class OKApiUnknownException extends OkApiException
{

    public function __construct(OkApiError $error)
    {
        parent::__construct(1, 'Unknown error occurred', $error);
    }

}
