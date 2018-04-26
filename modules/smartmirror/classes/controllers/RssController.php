<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/10/2017
 * Time: 16:51
 */

namespace Framework\Modules\Smartmirror\Controllers;

use Framework\Modules\Router\Response;
use Slim\Http\Request;

class RssController
{
    /**
     * This is the rss feed from nu.nl
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response rss feed from nu.nl to json
     */
    public static function NuDotNl(Request $request, Response $response, array $args) {
        $json = [];

        $response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($json));
        return $response;
    }
}