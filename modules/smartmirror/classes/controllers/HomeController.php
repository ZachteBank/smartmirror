<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/10/2017
 * Time: 16:51
 */

namespace Framework\Modules\Smartmirror\Controllers;

use Framework\Modules\Router\Response;
use Framework\Web\Tmp\Entities\LoginUser;
use Slim\Http\Request;

class HomeController
{
    public static function index(Request $request, Response $response, array $args) {

        /*
        $user = new LoginUser();
        $user->setPassword('hey');
        debug($user->getPassword());
        flash()->addMessage('success', 'Heyo~!');
        debug(flash()->getMessage('success'));
        */
        return $response->withView('%smartmirror.home', ['hey'=> $args]);
    }
    public static function information(Request $request, Response $response, array $args) {
        $response->write(' Dit is je taal: ');
        return $response->withView('%smartmirror.home');
    }

    public static function debugPost(Request $request, Response $response, array $args) {

        $data = $request->getParsedBody();

        debug($data);
        return var_dump($data);
    }
}