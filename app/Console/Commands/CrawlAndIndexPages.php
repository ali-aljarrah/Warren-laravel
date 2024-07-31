<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use App\Models\Page;

class CrawlAndIndexPages extends Command
{
    protected $signature = 'crawl:index-pages';
    protected $description = 'Crawl and index pages';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Crawler::create()
            ->setCrawlObserver(new class extends CrawlObserver {
                public function willCrawl(\Psr\Http\Message\UriInterface $url)
                {
                    echo "Now crawling: {$url}\n";
                }

                public function hasBeenCrawled(
                    \Psr\Http\Message\UriInterface $url,
                    \Psr\Http\Message\ResponseInterface $response,
                    ?\Psr\Http\Message\UriInterface $foundOnUrl = null
                ) {
                    $htmlContent = (string) $response->getBody();
                    $title = $this->extractTitle($htmlContent);
                    $content = $this->extractContent($htmlContent);

                    Page::updateOrCreate(
                        ['url' => (string) $url],
                        ['title' => $title, 'content' => $content]
                    );
                }

                public function finishedCrawling()
                {
                    echo "Finished crawling.\n";
                }

                private function extractTitle($html)
                {
                    preg_match('/<title>(.*?)<\/title>/', $html, $matches);
                    return $matches[1] ?? 'No title';
                }

                private function extractContent($html)
                {
                    preg_match('/<body.*?>(.*?)<\/body>/s', $html, $matches);
                    return strip_tags($matches[1] ?? 'No content');
                }
            })
            ->startCrawling('http://your-website-url.com');
    }
}
