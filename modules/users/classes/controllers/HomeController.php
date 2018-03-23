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

class HomeController
{
    public static function generate(Request $request, Response $response, array $args) {
        //$types = connection()->getRepository(FormGeneratorBasicRowType::class)->findAll();
        //return $response->withView('%masterlight.home');

        $templates = [];

        $files = scandir(ModuleFinder::findModuleFile('users', 'views/templates') );
        $files = array_diff($files, array('.', '..'));

        foreach($files as $file) {
            debug("Template: ".$file);
        }

        $templates = $files;

        return $response->withView('%users.generate', ['templates'=>$templates]);
    }

    //POST
    public static function send(Request $request, Response $response, array $args){
        $em = connection();
        $data = $request->getParsedBody();
        var_dump($data);
        debug($data);


        return $response->withRedirect(route("users.generate"));
    }


    public static function all(Request $request, Response $response, array $args) {
        //$forms = connection()->getRepository(FormGeneratorBasicForm::class)->findAll();
        return $response->withView('%users.allMails');
    }

    public static function information(Request $request, Response $response, array $args) {
        $response->write(' Dit is je taal: ' . $args['lang']);
        return $response->withView('%masterlight.home');
    }
}