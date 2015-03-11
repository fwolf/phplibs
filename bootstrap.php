<?php
/**
 * Bootstrap
 *
 *  - Register ClassLoader
 *  - Load default and user config
 *
 * This is only a dummy file, libs still use their own phpunit configure and
 * bootstrap. But libs have no actual vendor/ downloaded, so need to put a dummy
 * 'vendor/autoload.php' in each lib root dir, and  require real autoload file
 * in far parent directory, which is actual composer downloaded packages in.
 *
 * @copyright   Copyright 2015 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */

// Include autoloader
$classLoader = require __DIR__ . '/vendor/autoload.php';
