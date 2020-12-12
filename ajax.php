<?php

require __DIR__ . '/vendor/autoload.php';
use Zehnder\Services\Client;

$client = new Client();

$getDataApi = function ($method, $post) use ($client){

    $res = '';
    if(isset($post['email']))
    {
        $res = $client->userAdd($method, $post);
    }

    return $res;
};

$out = $client->parseData($_POST);
$res = $getDataApi($_POST['method'], $out);
$client->userToken($res);

echo $res;



