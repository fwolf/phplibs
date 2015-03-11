<?php
/**
 * Bootstrap
 *
 *  - Register ClassLoader
 *  - Load default and user config
 *
 * Can be used by all libs, example phpunit config:
 *      <phpunit bootstrap='../../bootstrap.php' />
 *
 * @copyright   Copyright 2015 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */

// Include autoloader
$classLoader = require __DIR__ . '/vendor/autoload.php';
