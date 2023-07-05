<?php

namespace  EnNa\OssTd;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class Api
{
    public function scrapRequest()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://harrypotter.fandom.com/wiki/Main_Page'
        );
        $content = $response->getContent();

        $html = $content;

        $crawler = new Crawler($html);
        $crawler->filter('#gallery-0 .lightbox-caption')->each(function (Crawler $node, $i){
            var_dump($node->text());
        });

        return $node->text();

        // $crawler->filter('#gallery-0 .lightbox-caption')->each(function (Crawler $node, $i): string {
        //     return $node->text();
        // });
    }
}

?>