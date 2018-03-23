<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/10/2017
 * Time: 16:51
 */

namespace Framework\Modules\Users\Controllers;

use Framework\Core\ModuleFinder;
use Framework\Modules\Router\Response;
use Slim\Http\Request;

class UserController
{
    public static function add(Request $request, Response $response, array $args) {

        return $response->withView('%users.users.add');
    }

    //POST
    public static function store(Request $request, Response $response, array $args){
        $em = connection();
        $data = $request->getParsedBody();
        var_dump($data);
        debug($data);


        return $response->withRedirect(route("users.user.all"));
    }


    public static function all(Request $request, Response $response, array $args) {
        //$forms = connection()->getRepository(FormGeneratorBasicForm::class)->findAll();
        return $response->withView('%users.users.all');
    }
}