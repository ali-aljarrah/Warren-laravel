<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use App\Models\Page;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

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
        echo "Starting crawler...\n";
        Crawler::create()
            ->setCrawlObserver(new class extends CrawlObserver {
                public function willCrawl(UriInterface $url): void
                {
                    echo "Now crawling: {$url}\n";
                }

                public function hasBeenCrawled(
                    UriInterface $url,
                    ResponseInterface $response,
                    ?UriInterface $foundOnUrl = null
                ): void {
                    echo "Start saving\n";


                }

                public function finishedCrawling(): void
                {
                    echo "Finished crawling.\n";
                }

                public function crawled(
                    UriInterface $url,
                    ResponseInterface $response,
                    ?UriInterface $foundOnUrl = null
                ): void {
                    $statusCode = $response->getStatusCode();
                    echo "Status code: " . $statusCode . "\n";

                    if ($statusCode !== 200) {
                        echo "Non-200 response, skipping URL: {$url}\n";
                        return;
                    }

                    $htmlContent = (string) $response->getBody();
                    echo "HTML content length: " . strlen($htmlContent) . "\n";

                    $title = $this->extractTitle($htmlContent);
                    $content = $this->extractContent($htmlContent);

                    echo "Saving URL: {$url}\n";
                    echo "Title: {$title}\n";
                    echo "Content Length: " . strlen($content) . "\n";

                    try {
                        $page = Page::updateOrCreate(
                            ['url' => (string) $url],
                            ['title' => $title, 'content' => $content]
                        );

                        if ($page->wasRecentlyCreated) {
                            echo "Page was created.\n";
                        } else {
                            echo "Page was updated.\n";
                        }
                    } catch (\Exception $e) {
                        echo "Failed to save page: " . $e->getMessage() . "\n";
                    }
                    echo "Crawled: {$url}\n";
                }

                public function crawlFailed(
                    UriInterface $url,
                    RequestException $requestException,
                    ?UriInterface $foundOnUrl = null
                ): void {
                    echo "Crawl failed for URL: {$url}\n";
                }

                private function extractTitle($html): string
                {
                    preg_match('/<title>(.*?)<\/title>/', $html, $matches);
                    return $matches[1] ?? 'No title';
                }

                private function extractContent($html): string
                {
                    preg_match('/<body.*?>(.*?)<\/body>/s', $html, $matches);
                    return strip_tags($matches[1] ?? 'No content');
                }
            })
            ->startCrawling('https://www.warrenlaserdentistry.com/');
    }
}
