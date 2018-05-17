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
        $url = "https://www.nu.nl/rss/Algemeen";
        $json = [];

        $json["site"] = $url;

        $json["items"] = [];


        $feed = simplexml_load_file($url);


        $i = 0;
        foreach ($feed->channel->item as $item) {
            $title       = (string) $item->title;
            $description = (string) $item->description;
            $link = (string) $item->link;
            $json["items"][$i]["title"] = $title;
            $json["items"][$i]["description"] = $description;
            $json["items"][$i]["link"] = $link;

            $i++;
        }

        $response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($json));
        return $response;
    }

    public function test()
    {
        return null;
    }
}