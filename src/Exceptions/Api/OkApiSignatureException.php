<?php

namespace OK\Exceptions\Api;

use JetBrains\PhpStorm\Pure;
use OK\Client\OkApiError;
use OK\Exceptions\OkApiException;

class OkApiSignatureException extends OkApiException
{

    #[Pure]
    public function __construct(
        OkApiError $error
    )
    {
        parent::__construct(104, 'Неверная подпись', $error);
    }
}
