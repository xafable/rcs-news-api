<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Http\Resources\FullArticle;


class ArticleController extends Controller
{
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            $fails = [];
            $id = $request->route()->parameter('id');

            if(!is_numeric($id))
                $fails['integer'] = 'The Id must be an integer.';
            if($id < 1)
                $fails['negative'] = 'The Id must be at least 1.';

            if($fails){
                return response()->json([
                    'success' => false,
                    'message'=> 'Validation failed.',
                    'fails'=> $fails
                ], 422);
            }
            return $next($request);
        });
    }

    function index($id) {
        $resourceCollection = new ArticleCollection(
            \App\Models\Category::query()
                ->findOrFail($id)
                ->articles()
                ->paginate(10));

        return response()->json([
            'success' => true,
            'articles' => $resourceCollection,
        ]);
    }

    function show($id){
        return response()->json([
            'success' => true,
            'article' => new FullArticle(\App\Models\Article::query()->findOrFail($id)),
        ]);
    }
}
