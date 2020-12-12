<?php

namespace Zehnder\Services;

class Zehnder
{
    private $url;
    private $jwtToken;
    private $headers;
    private $method;
    private $data;

    public function __construct()
    {
        $this->url = 'https://api.ros-design.com/api/';
    }

    /**
     * @return mixed
     */
    public function getJwtToken()
    {
        return $this->jwtToken;
    }

    /**
     * @param mixed $jwtToken
     */
    public function setJwtToken($jwtToken)
    {
        $this->jwtToken = $jwtToken;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method = 'GET')
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers = 'GET')
    {
        if($headers === 'POST')
        {
            $this->headers = [
                "Content-Type: application/json",
                "Accept: application/json"
            ];
        }
        else
        {
            $this->headers = [
                "Content-Type: application/json",
                "Authorization: {$this->jwtToken}",
                "Accept: application/json"
            ];
        }

    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    public function sendRequest($urlMethod)
    {
        $request_url = $this->url . $urlMethod;

        $ch = curl_init($request_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        if($this->method === "POST")
        {
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data));
        }

        if(count($this->headers))
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        }
        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }

}