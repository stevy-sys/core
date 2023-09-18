<?php

use Stevy\Framework\Routes\Router;




/**
 * $_GET['url] : url tapez par utilisateur
 */
if (!isset($_GET['url'])) {
    $_GET['url'] = '/' ;
}
$router = new Router($_GET['url']);