<?php

/**
 * @var Library\Application $app
 */
$app = require dirname(dirname(__DIR__)) . '/Bootstrap/init.php';

/**
 * Dispatch routes
 */
$app['router']->routing('api')->run();
