<?php

namespace Ratemarkt;

/**
 * Class RatemarktResource
 * @package Ratemarkt
 */
class RatemarktResource extends ApiResource
{
    const CLIENT_VERSION = '0.0.1';

    protected static function getHttpHeaders()
    {
        $header = array(
            "Accept: application/json",
            "Content-type: application/json",
        );

        array_push($header, "x-ratemarkt-client-version: "."ratemarkt-php-".self::CLIENT_VERSION);

        return $header;
    }
}
