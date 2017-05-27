<?php

/**
 * @var Library\Application $app
 */
$app = require 'src/Bootstrap/init.php';

/**
 * create/update file pimple.json
 */
$app->register(new \Sorien\Provider\PimpleDumpProvider());