<?php

namespace Ratemarkt;

/**
 * Class Curl
 * @package Ratemarkt
 */
class Curl
{
    public function exec($url, $options)
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);

        return curl_exec($ch);
    }
}
