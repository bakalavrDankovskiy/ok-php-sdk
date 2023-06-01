<?php

namespace OK\Exceptions\Api;

use OK\Client\OkApiError;
use OK\Exceptions\OkApiException;

class OKApiServiceException extends OkApiException
{

    public function __construct(OkApiError $error) {
        parent::__construct(2, 'Service temporarily unavailable', $error);
    }
}
