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
        $articles = Article::getArticles();

        return view('blog', ['articles' => $articles]);
    }
}
