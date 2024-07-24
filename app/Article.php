<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public static function getArticles() {
        return $articles = DB::table('articles')->select('image', 'author', 'title', 'created_at')->paginate();
    }
}
