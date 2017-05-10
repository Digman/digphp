<?php
/**
 * Application Entry File
 * Do some initialization
 */

/**
 * Load constants
 */
require dirname(__DIR__) . '/Bootstrap/constants.php';

/**
 * Setup autoload
 */
require PATH_ROOT . '/Vendor/autoload.php';

/**
 * Util functions
 */
require PATH_ROOT . '/Bootstrap/utils.php';

/**
 * @var Library\Application
 */
return Library\Application::init();