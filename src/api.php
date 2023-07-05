<?php

namespace  EnNa\ScrapTd;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class Api
{
    /**
     * @return string[]
     */
    public function scrapRequest() : array 
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://harrypotter.fandom.com/wiki/Main_Page'
        );
        $content = $response->getContent();

        $html = $content;

        $characters = [];

        $crawler = new Crawler($html);
        $crawler->filter('#gallery-0 .lightbox-caption')->each(function (Crawler $node, $i) use (&$characters){
            $characters[] = $node->text();
        });

        return $characters;
    }
}

?>