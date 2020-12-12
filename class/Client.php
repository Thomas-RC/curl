<?php


namespace Zehnder\Services;


class Client extends Zehnder
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function userAdd($method, $post)
    {
        $this->setHeaders('POST');
        $this->setData($post);
        $this->setMethod('POST');
        return $this->sendRequest($method);
    }

    public function userGet($token)
    {
        $this->setJwtToken($token);
        $this->setHeaders();
        $res = $this->sendRequest('user');

        return json_decode($res, true);
    }

    public function userToken($res)
    {
        $json = json_decode($res,true);

        if(isset($json['data']['token']))
        {
            Session::setTokenSession($json['data']['token']);
        }
    }

    public function userLogout($token)
    {
        $this->setJwtToken($token);
        return $this->sendRequest('logout');
    }

    public function parseData($post)
    {
        parse_str($post['data'], $out);
        return $out;
    }


}