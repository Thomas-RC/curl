<?php
session_start();
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri === '/')
    $uri = 'home';

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/view/twig');
$twig = new Environment($loader);

ob_start();

    require_once __DIR__ . '/view/php/layout/header.php';
    echo $header ?? '';

    require_once __DIR__ . '/view/php/layout/navbar.php';
    echo $navbar ?? '';

    if (file_exists(__DIR__ . '/view/php/' . $uri . '.php'))
        require_once __DIR__ . '/view/php/' . $uri . '.php';
    else
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h3 class='text-center mt-5'>404 - Not Found </h3>";
    }
    echo $body ?? '';

    require_once __DIR__ . '/view/php/layout/footer.php';
    echo $footer ?? '';

ob_flush();