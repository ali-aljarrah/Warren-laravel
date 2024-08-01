<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $pages = Page::where('title', 'like', '%' . $query . '%')
                     ->orWhere('content', 'like', '%' . $query . '%')
                     ->paginate();

        return view('search_results', compact('pages', 'query'));
    }
}
