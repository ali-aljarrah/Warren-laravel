<?php

namespace App\Http\Controllers;

use App\Services\GooglePlacesService;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use App\Article;
use App\Mail\contactEmail;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    protected $googlePlaces;

    public function __construct(GooglePlacesService $googlePlaces)
    {
        $this->googlePlaces = $googlePlaces;
    }

    // Home page
    public function homePage() {
        $placeId = env('WARREN_PLACE_ID');
        $reviews = $this->googlePlaces->getReviews($placeId);

        return view('home', compact('reviews'));
    }

    // Blog page
    public function blogPage() {
        try {
            $articles = Article::getArticles();

            return view('blog', ['articles' => $articles]);
        } catch (\Throwable $th) {
            $articles = [];

            return view('blog', ['articles' => $articles]);
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

    // Send email function
    public function sendEmail(Request $request) {
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'reCaptcharesponse' => ['required', new Recaptcha()],
            'message' => 'required|string',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'
        ],
        [
             'reCaptcharesponse.required' => 'ReCaptcha is Required',
        ]);


        try {
            Mail::to('demo@mail.com')->send(new contactEmail([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'phoneNumber' => $request->phoneNumber,
                'message' => $request->message,
           ]));

           return response()->json(['message' => 'Email sent successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'e' => $e]);
        }
    }
}
