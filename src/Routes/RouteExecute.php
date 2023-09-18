<?php

use Stevy\Framework\Exception\NotFoundException;



/**
 * recherche de route existant et execution de controller
 */
try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}