<?php

use EnNa\OssTd\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandomNumber());
    }
}

?>