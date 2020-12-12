<?php


namespace Zehnder\Services;


class Session
{

    public static function setTokenSession($token)
    {
        session_start();
        $_SESSION['token'] = $token;
    }

    public static function destroySession(array $sessionVar)
    {
        session_start();
        foreach ($sessionVar as $item)
        {
            unset($_SESSION[$item]);
        }
        session_destroy();
    }

}