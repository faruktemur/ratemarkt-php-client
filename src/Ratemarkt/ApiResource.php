<?php

namespace Ratemarkt;

/**
 * Class ApiResource
 * @package Ratemarkt
 */
class ApiResource
{
    private static $httpClient;
    private $rawResult;

    /**
     * @return HttpClient
     */
    public static function httpClient()
    {
        if (!self::$httpClient) {
            self::$httpClient = HttpClient::create();
        }

        return self::$httpClient;
    }

    /**
     * @param $httpClient
     */
    public static function setHttpClient($httpClient)
    {
        self::$httpClient = $httpClient;
    }

    /**
     * @return mixed
     */
    public function getRawResult()
    {
        return $this->rawResult;
    }

    /**
     * @param $rawResult
     */
    public function setRawResult($rawResult)
    {
        $this->rawResult = $rawResult;
    }
}
