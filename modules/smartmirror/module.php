<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/06/2017
 * Time: 02:07
 */

use Framework\Modules\Smartmirror\Smartmirror;

return [
    'module'       => Smartmirror::class,
    'dependencies' => [
        'router',
        'view',
        'asset',
        'config',
        'database',
        'migration',
        'exception',
        'debugbar',
        'gentelella',
        'login',
        'users',
        'localization',
        "googleCalendar",
        "weatherIcons",
        'session','csrf', 'roles', 'viewMinifier'
    ]
];