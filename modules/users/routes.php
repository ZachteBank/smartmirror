<?php
/**
 * Created by PhpStorm.
 * User: bramk
 * Date: 28-12-2017
 * Time: 13:05
 */


use Framework\Modules\Users\Controllers\GroupController;
use Framework\Modules\Users\Controllers\UserController;


router()->group('/cms', function () {
    router()->group('/users', function () {
        router()->get('/add', [UserController::class, 'add'])->setName('users.user.add');
        router()->post('/store', [UserController::class, 'store'])->setName('users.user.store')->add(csrf());
        router()->get('/all', [UserController::class, 'all'])->setName('users.user.all');
    });
    router()->group('/groups', function () {
        router()->get('/add', [GroupController::class, 'add'])->setName('users.group.add');
        router()->post('/store', [GroupController::class, 'store'])->setName('users.group.store')->add(csrf());
        router()->get('/all', [GroupController::class, 'all'])->setName('users.group.all');
    });
});



