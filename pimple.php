<?php

/**
 * @var Library\Application $app
 */
$app = require __DIR__ . '/src/Bootstrap/init.php';

/**
 * create/update file pimple.json
 */
$app->register(new \Sorien\Provider\PimpleDumpProvider());