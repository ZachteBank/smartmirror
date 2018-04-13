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
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Google_Service_Drive;
use Slim\Http\Request;

class HomeController
{
    public static function all(Request $request, Response $response, array $args)
    {
        /**
         * @var Google_Service_Calendar_Event $result
         */
        $client = new Google_Client();
        $file = __DIR__ . "\..\..\client_secret.json";
        debug($file);
        $client->setAuthConfig($file);
        $client->addScope(Google_Service_Calendar::CALENDAR_READONLY);

        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);

            $service = new Google_Service_Calendar($client);

            // Print the next 10 events on the user's calendar.
            $calendarId = 'primary';
            $optParams = array(
                'maxResults' => 10,
                'orderBy' => 'startTime',
                'singleEvents' => TRUE,
                'timeMin' => date('c'),
            );
            echo json_encode($results = $service->events->listEvents($calendarId, $optParams)->toSimpleObject());
            exit;
        } else {
            return $response->withRedirect(route('google.init'));
        }
    }

    public static function callBack(Request $request, Response $response, array $args)
    {
        $client = new Google_Client();
        $file = __DIR__ . "\..\..\client_secret.json";
        $client->setAuthConfigFile($file);
        $client->setRedirectUri(route("google.init"));
        $client->addScope(Google_Service_Calendar::CALENDAR_READONLY);

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