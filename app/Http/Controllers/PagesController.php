<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    // Smile gellery page
    public function smileGalleryPage() {
        return view('smile-gallery');
    }

    // Blog page
    public function blogPage() {
        try {
            $articles = Article::getArticles();

            return view('blog', ['articles' => $articles]);
        } catch (\Throwable $th) {
            abort(500);
        }

    }

    // Show article
    public function showArticle(Request $request) {
        try {
            $article = Article::getArticleById($request->id);

            return view('article', ['article' => $article]);
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    // Search for article
    public function searchArticle(Request $request) {
        $query = $request->input('query');

        // Search articles with the provided query
        $articles = Article::where('title', 'LIKE', "%{$query}%")
                           ->orWhere('article_content', 'LIKE', "%{$query}%")
                           ->select('id','title','article_content')
                           ->get();

        // Return the results as JSON
        return response()->json($articles);
    }

    // Testimonials Page
    public function patientTestimonialsPage() {
        return view('patient-testimonials');
    }
}
