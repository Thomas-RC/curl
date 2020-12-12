<?php
use Zehnder\Services\Client;
use Zehnder\Services\Session;

$client = new Client();

if(isset($_SESSION['zehnder']))
{
    $client->userLogout($_SESSION['token']);
    Session::destroySession(['token', 'zehnder']);
}

header('Location: /');