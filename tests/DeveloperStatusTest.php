<?php
/**
 * Created by PhpStorm.
 * User: BABATUNDE
 * Date: 9/26/2018
 * Time: 3:33 PM
 */


namespace DeveloperStatus\Tests;

use BabatundeOlajide\DeveloperStatus\DeveloperStatus;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class DeveloperStatusTest extends TestCase
{

    private static $guzzle;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        self::$guzzle = new Client([
            "headers" => [
                "Content-Type" => "application/json"
            ]
        ]);
    }

    public function testGetDeveloperStatus()
    {
        $developerStatus = new DeveloperStatus();
        echo "\nRunning Test... " . __METHOD__ . "\n";
        $status = $developerStatus->getStatus("babs100");
        echo $status;
        $this->assertNotEmpty($status);
        echo "\nDone!";
    }
}
