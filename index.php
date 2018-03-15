<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/05/2017
 * Time: 16:00
 */

/**
 * This constant defined the application start timestamp.
 */
define('F_BEGIN_TIME', microtime(true));

/**
 * This is the config file which holds multiple constants.
 */
require_once __DIR__ . '/config.php';

/**
 * This constant defines the current directory.
 */
defined('__ROOT__') or define('__ROOT__', __DIR__);

/**
 * This constant defines the framework installation directory.
 */
if(!defined('F_DIRECTORY') || F_DIRECTORY === false){
    echo '<b>Error:</b> Please define the installation directory of the framework in \'F_DIRECTORY\'.';
    exit;
}

require_once F_DIRECTORY . '/bootstrap.php';