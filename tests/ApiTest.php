<?php

use EnNa\ScrapTd\Api;
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/api.php";

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