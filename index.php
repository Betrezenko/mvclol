<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri)
{
    require_once 'view/login.php';
}
elseif ('/controller/login_action.php' === $uri)
{
    require_once 'controller/login_action.php';
}
//elseif ('/balance' === $uri)
//{
//    require_once 'view/balance.php';
//}
else
{
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><p>404 Page Not Found</p><p><a href="/">exit</a></p></body></html>';

}