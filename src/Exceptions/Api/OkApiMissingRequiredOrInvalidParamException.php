<?php

namespace OK\Exceptions\Api;

use JetBrains\PhpStorm\Pure;
use OK\Client\OkApiError;
use OK\Exceptions\OkApiException;

class OkApiMissingRequiredOrInvalidParamException extends OkApiException
{

    #[Pure]
    public function __construct(
        OkApiError $error
    )
    {
        parent::__construct(100, 'Отсутствующий или неверный параметр', $error);
    }

}
