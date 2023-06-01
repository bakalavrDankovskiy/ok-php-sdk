<?php

namespace OK\Exceptions\Api;

use OK\Client\OkApiError;
use OK\Exceptions\OkApiException;

class OKApiMethodException extends OkApiException
{
    public function __construct(OkApiError $error)
    {
        parent::__construct(3, 'Method does not exist', $error);
    }
}
