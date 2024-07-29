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

    // Testimonials Page
    public function patientTestimonialsPage() {
        return view('patient-testimonials');
    }
}
