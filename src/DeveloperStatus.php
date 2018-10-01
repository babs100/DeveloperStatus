<?php
/**
 * Created by PhpStorm.
 * User: BABATUNDE
 * Date: 9/26/2018
 * Time: 3:22 PM
 */

namespace BabatundeOlajide\DeveloperStatus;

use GuzzleHttp\Client;

class DeveloperStatus
{
    /**
     * Create a new DeveloperStatus instance.
     */
    public function __construct()
    {
    }

    /**
     * This returns the status of the username passed.
     * @param $username
     * @return string
     */
    public static function getStatus($username)
    {
        $guzzleClient = new Client(
            [
            "headers" => [
                "Content-Type" => "application/json"
                ]
            ]
        );

        $result = $guzzleClient->get("https://api.github.com/users/{$username}?client_id=bb407a7e41c62d4e2702&client_secret=ff77671b9ee1bc3527a867be2481d3738a28e2ad");
        $code = $result->getStatusCode();

        if($code == 404) {
            return "Developer {$username}: not found!";
        }

        $response = json_decode($result->getBody(), true);
        $numberOfRepositories = $response["public_repos"];

        if ($numberOfRepositories >= 21) {
            $devStatus = "Yeah, I crown you Senior Developer. Thanks for making the world a better place";
        }
        elseif ($numberOfRepositories >= 11) {
            $devStatus = "Keep up the good work, I crown you Associate Developer";
        }
        elseif ($numberOfRepositories >= 5) {
            $devStatus = "Damn It!!! Please make the word a better place, Oh Ye Prodigal Junior Developer";
        }
        else {
            $devStatus = "Up your game";
        }

        return $devStatus;

    }
}