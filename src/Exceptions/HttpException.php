<?php

namespace SON\Framework\Exceptions;

class HttpException extends \Exception{

    public function __construct($message, $code, \Exception $previous = null)
    {
        http_response_code($code);
        parent::__construct($message, $code, $previous); //Envia os paramentros para o construtor principal, o construtor da classe Exception
    }
}