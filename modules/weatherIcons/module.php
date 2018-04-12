<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 09:37
 */



return ["module" => Framework\Modules\WeatherIcons\Users::class,
        "dependencies" => [
            "asset",
            "migration",
            "view",
            "router",
            "entityGenerator",
            "gentelella", 'csrf'
        ]

];