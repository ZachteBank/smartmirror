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


        /*$opts = array('http' => array('header'=> 'Cookie: ' . $_SERVER['HTTP_COOKIE']."\r\n"));
        $context = stream_context_create($opts);

        session_write_close(); // unlock the file
        $googleCalendar = file_get_contents(route("google.calendar.all"), false, $context);
        session_start(); // Lock the file
        debug($googleCalendar);

        $googleCalendar = json_decode($googleCalendar);
        debug($googleCalendar);*/
        return $response->withView('%smartmirror.mirror.mirror', ['hey'=> $args]);
    }
}