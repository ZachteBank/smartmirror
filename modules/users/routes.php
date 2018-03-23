<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 13:05
 */


use Framework\Modules\Mailing\Controllers\HomeController;


router()->group('/pages', function () {
    router()->group('/users', function () {
        router()->get('/generate', [HomeController::class, 'generate'])->setName('users.generate');
        router()->post('/send', [HomeController::class, 'send'])->setName('users.sendMail')->add(csrf());
        router()->get('/all-mails', [HomeController::class, 'all'])->setName('users.allMails');
    });
});



