<?php
/**
 * Application Entry File
 * Do some initialization
 */

/**
 * Setup autoload
 */
require dirname(__DIR__) . '/Vendor/autoload.php';

/**
 * @var Library\Application
 */
return Library\Application::init();