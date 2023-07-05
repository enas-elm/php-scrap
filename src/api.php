<?php

declare(strict_types=1);

namespace EnNa\ScrapTd;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class Api
{
    /**
     * @return array<int, string>
     */
    public function scrapRequest() : array 
    {
        $scrapURL = 'https://harrypotter.fandom.com';

        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $scrapURL
        );
        $content = $response->getContent();

        $html = $content;

        $characters = [];

        $crawler = new Crawler($html);


        // Scrap characters names
        $crawler->filter('#gallery-0 .lightbox-caption')->each(function (Crawler $node, $i) use (&$characters){
            $characters[] = $node->text();
        });

        
        // Scrap characters links
        $links = $crawler->filter('#gallery-0 .link-internal');

        foreach ($links as $link) {
            $characters[] = $scrapURL. $link->getAttribute('href');
        }


     
        // $links = $crawler->filter('#gallery-0 .link-internal')->attr('href');
        //   foreach ($links as $link) {
        //     $characters[] = $scrapURL. $link;
        // }
       

        return $characters;
    }
}

?>