<?php

use EnNa\ScrapTd\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testScrapRequest()
    {
        $api = new Api();

        $this->assertIsArray($api->scrapRequest());
        $this->assertNotEmpty($api->scrapRequest());
    }
}

?>