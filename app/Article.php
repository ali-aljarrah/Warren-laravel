<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    protected $fillable = ['id', 'image', 'author', 'title', 'created_at', 'article_content'];
    // Get all articles
    public static function getArticles() {
        return $articles = DB::table('articles')->select('id','image', 'author', 'title', 'created_at', 'article_content')->paginate();
    }

    // Get article by ID
    public static function getArticleById($id) {
        return $article = DB::table('articles')->where('id', $id)->first();
    }
}
