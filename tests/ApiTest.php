<?php

use EnNa\OssTd\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testScrapRequest()
    {
        $api = new Api();

        $this->assertIsArray($api->scrapRequest());
    }
}

?>