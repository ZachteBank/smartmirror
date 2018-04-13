<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 13:05
 */


use Framework\Modules\GoogleCalendar\Controllers\HomeController;
use Framework\Modules\Users\Controllers\GroupController;
use Framework\Modules\Users\Controllers\UserController;



router()->group('/google', function () {
    router()->get('/init', [HomeController::class, 'callback'])->setName('google.init');

    router()->group('/calendar', function () {
        router()->get('/all', [HomeController::class, 'all'])->setName('google.calendar.all');
    });
});



