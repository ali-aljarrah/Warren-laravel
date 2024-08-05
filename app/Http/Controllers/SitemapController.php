<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Http\Request;
use App\Article;

class SitemapController extends Controller
{
    public function index()
    {
        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Get all routes
        $routes = Route::getRoutes();

        // Define specific routes to exclude
        $excludedSpecificRoutes = [
            '/arrilot/load-widget',
            '/sanctum/csrf-cookie',
            '/_ignition/health-check'
        ];

        foreach ($routes as $route) {
            // Define conditions to exclude routes
            $excludedNames = ['login', 'register', 'password.request', 'search', 'generate-sitemap', 'sendEmail', 'search-pages']; // Route names to exclude
            $excludedUris = ['admin/*', 'api/*', 'blog/*']; // URI patterns to exclude, including /blog/{id}/{title}

            $routeName = $route->getName();
            $routeUri = $route->uri();

            // Check if the route should be excluded
            $exclude = false;

            // Check by name
            if (in_array($routeName, $excludedNames)) {
                $exclude = true;
            }

            // Check by URI pattern
            foreach ($excludedUris as $pattern) {
                if (fnmatch($pattern, $routeUri)) {
                    $exclude = true;
                    break;
                }
            }

             // Check by specific routes
             if (in_array($routeUri, $excludedSpecificRoutes)) {
                $exclude = true;
            }

            // Add the route to the sitemap if not excluded
            if (!$exclude && in_array('GET', $route->methods())) {
                $url = url($route->uri());
                $sitemap->add(Url::create($url)
                    ->setPriority(0.5) // Set a default priority, you can customize this
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY) // Set a default change frequency
                    ->setLastModificationDate(now()));
            }
        }

        // Add dynamic blog URLs
        $blogs = Article::all();
        foreach ($blogs as $blog) {
            $blog_title = str_replace(' ', '-', strtolower($blog->title));
            $blogUrl = url("/blog/{$blog->id}/{$blog_title}");
            $sitemap->add(Url::create($blogUrl)
                ->setPriority(0.7) // Set a default priority, you can customize this
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY) // Set a default change frequency
                ->setLastModificationDate($blog->updated_at));
        }

        // Save the sitemap (this will overwrite the existing sitemap.xml file)
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->json(['message' => 'Sitemap generated successfully!']);
    }
}
