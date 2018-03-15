<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/05/2017
 * Time: 16:06
 */

/**
 * This constant defines the framework installation directory.
 */
define('F_DIRECTORY', realpath('../Framework'));

/**
 * This constant defines the directories that the modules can reside in.
 * (This constant should be sorted with high to low priority)
 */
define('F_MODULE_DIRECTORIES', [
    __DIR__ . '/modules',
    F_DIRECTORY . '/modules'
]);

/**
 * This constant defines the module that has the most authority.
 * (This is commonly used for website modules)
 */
define('F_MODULE_MAIN', 'smartmirror');

/**
 * This constant defines in which environment we are working in.
 * (This is commonly either 'live' or 'dev')
 */
define('F_CONFIG', 'dev');