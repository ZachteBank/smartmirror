<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/10/2017
 * Time: 16:51
 */

namespace Framework\Modules\Masterlight\Controllers;

use Framework\Modules\Login\Controllers\LoginControllerBase;
use Framework\Modules\Router\Response;
use Framework\Web\Tmp\Entities\LoginUser;
use Slim\Http\Request;

class LoginController extends LoginControllerBase
{
    public static function index(Request $request, Response $response, array $args) {
        return $response->withView('%gentelella.login', [
            'loginUrl' => route('login'),
            'registerUrl' => route('register'),
            'lostUrl' => route('accountLost')
        ]);
    }
    public static function login(Request $request, Response $response, array $args) {

        $response = static::doLogin($request, $response, $args);
        if(user()){
            return $response->withRedirect(route('home'));
        }

        flash()->addMessage('error', __('Het opgegeven e-mailadres of wachtwoord is onjuist.'));

        return $response->withRedirect(route('login'));
    }
    public static function logout(Request $request, Response $response, array $args) {
        static::doLogout($request, $response, $args);

        flash()->addMessage('success', __('U bent uitgelogd.'));
        return $response->withRedirect(route('home'));
    }
}