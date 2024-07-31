<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use App\Article;

class PagesController extends Controller
{

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
        $query = htmlspecialchars(strip_tags($request->input('query')), ENT_QUOTES, 'UTF-8', false);

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

    // Send email function
    public function sendEmail(Request $request) {
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            '_token' => ['required', new Recaptcha()],
            'message' => 'required|string',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'
        ],
        [
             'g-recaptcha-response.required' => 'ReCaptcha is Required',
        ]);

        return 'test';
    }
}
