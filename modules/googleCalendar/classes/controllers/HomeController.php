<?php
/**
 * Created by PhpStorm.
 * User: Michiel
 * Date: 12/10/2017
 * Time: 16:51
 */

namespace Framework\Modules\GoogleCalendar\Controllers;

use Framework\Core\ModuleFinder;
use Framework\Modules\Router\Response;
use Google_Client;
use Google_Service_Drive;
use Slim\Http\Request;

class HomeController
{
    public static function all(Request $request, Response $response, array $args)
    {
        $client = new Google_Client();
        $client->setAuthConfig(asset("googleCalendar", "client_secret.json"));
        $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);

        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
            $drive = new Google_Service_Drive($client);
            $files = $drive->files->listFiles(array())->getItems();
            echo json_encode($files);
        } else {
            return $response->withRedirect(route('google.init'));

        }
    }

    public static function callBack(Request $request, Response $response, array $args)
    {
        $client = new Google_Client();
        $client->setAuthConfigFile(asset("googleCalendar", "client_secret.json"));
        $client->setRedirectUri(route("google.init"));
        $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);

        if (! isset($_GET['code'])) {
            $auth_url = $client->createAuthUrl();
            return $response->withRedirect(filter_var($auth_url, FILTER_SANITIZE_URL));
        } else {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
            return $response->withRedirect(route('google.calendar.all'));
        }
    }
}