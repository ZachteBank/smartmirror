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

class MirrorController
{
    public static function index(Request $request, Response $response, array $args) {

        /*
        $users = new LoginUser();
        $users->setPassword('hey');
        debug($users->getPassword());
        flash()->addMessage('success', 'Heyo~!');
        debug(flash()->getMessage('success'));
        */
        return $response->withView('%smartmirror.mirror.mirror', ['hey'=> $args]);
    }
}