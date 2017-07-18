<?php

namespace Ratemarkt;

/**
 * Class HttpClient
 * @package Ratemarkt
 */
class HttpClient implements HttpClientInterface
{
    private $curl;

    /**
     * HttpClient constructor.
     * @param $curl
     */
    public function __construct($curl)
    {
        if (!$curl) {
            $curl = new Curl();
        }
        $this->curl = $curl;
    }

    /**
     * @param null $curl
     * @return HttpClient
     */
    public static function create($curl = null)
    {
        return new HttpClient($curl);
    }

    /**
     * @param $url
     * @return mixed
     */
    public function get($url)
    {
        return $this->curl->exec(
            $url,
            array(
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_VERBOSE => false,
                CURLOPT_HEADER => false,
            )
        );
    }

    /**
     * @param $url
     * @param $header
     * @param $content
     * @return mixed
     */
    public function post($url, $header, $content)
    {
        return $this->curl->exec(
            $url,
            array(
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $content,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_VERBOSE => false,
                CURLOPT_HEADER => false,
                CURLOPT_HTTPHEADER => $header,
            )
        );
    }

    /**
     * @param $url
     * @param $header
     * @param $content
     * @return mixed
     */
    public function put($url, $header, $content)
    {
        return $this->curl->exec(
            $url,
            array(
                CURLOPT_CUSTOMREQUEST => "PUT",
                CURLOPT_POSTFIELDS => $content,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_VERBOSE => false,
                CURLOPT_HEADER => false,
                CURLOPT_HTTPHEADER => $header,
            )
        );
    }

    /**
     * @param $url
     * @param $header
     * @param null $content
     * @return mixed
     */
    public function delete($url, $header, $content = null)
    {
        return $this->curl->exec(
            $url,
            array(
                CURLOPT_CUSTOMREQUEST => "DELETE",
                CURLOPT_POSTFIELDS => $content,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_VERBOSE => false,
                CURLOPT_HEADER => false,
                CURLOPT_HTTPHEADER => $header,
            )
        );
    }
}
