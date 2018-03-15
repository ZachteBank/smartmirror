<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/06/2017
 * Time: 02:07
 */

use Framework\Modules\Login\Middleware\LoginMiddleware;
use Framework\Modules\Smartmirror\Controllers\HomeController;
use Framework\Modules\Smartmirror\Controllers\MirrorController;

router()->group('/about', function () {
    router()->get('/us', [HomeController::class, 'information'])->setName('info');
    router()->catch('404', '{path:.*}', [HomeController::class, 'index']);
    router()->catch('exception', '{path:.*}', [HomeController::class, 'information']);
    router()->catch('error', '{path:.*}', [HomeController::class, 'information']);
});

router()->group('/debug', function () {
    router()->post('/post', [HomeController::class, 'debugPost'])->setName('debugPost');
});

#region Login
{
    router()->get('/login', [LoginController::class, 'index'])->setName('login');
    router()->post('/login', [LoginController::class, 'login'])->setName('login');

    router()->get('/register', [LoginController::class, 'login'])->setName('register');
    router()->post('/register', [LoginController::class, 'login'])->setName('register');

    router()->get('/password-lost', [LoginController::class, 'login'])->setName('accountLost');
    router()->post('/password-lost', [LoginController::class, 'login'])->setName('accountLost');

    router()->get('/logout', [LoginController::class, 'logout'])->setName('logout');

    router()->add(new LoginMiddleware());
}
#endregion

router()->get('/home', [HomeController::class, 'index'])->setName('home');

router()->get('/mirror', [MirrorController::class, 'index'])->setName('mirrorView');
