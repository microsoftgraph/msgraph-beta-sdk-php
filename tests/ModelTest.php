<?php

namespace Microsoft\Graph\Test;

use Beta\Microsoft\Graph\Model\Entity;
use Beta\Microsoft\Graph\Model\Schedule;
use Beta\Microsoft\Graph\Model\Status;
use Beta\Microsoft\Graph\Model\TimeOffRequest;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    function testSerialization()
    {
        $propDict = [
            "id" => 1,
            "name" => "User",
            "status" => Status::ACTIVE,
            "schedule" => new Schedule([
                "enabled" => true,
                "timeOffRequests" => [
                    new TimeOffRequest(["name" => "user"]),
                    new TimeOffRequest(["name" => "user"])
                ]
            ]),
            "hireDate" => new \DateTime("2021-11-12 00:00:00"),
            "ageGroup" => null
        ];
        $entity = new Entity($propDict);
        $expected = <<<'EOT'
        {
            "id": 1,
            "name": "User",
            "status": "active",
            "schedule": {
                "enabled": true,
                "timeOffRequests": [
                    {
                        "name": "user"
                    },
                    {
                        "name": "user"
                    }
                ]
            },
            "hireDate": "2021-11-12T00:00:00+00:00",
            "ageGroup": null
        }
        EOT;
        // Remove all whitespace characters for accurate comparison
        $expected = preg_replace('/\s+/', "", $expected);
        $this->assertEquals($expected, json_encode($entity));
    }
}
