<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;

class CategoryController extends Controller
{
    function index(){
        $resourceCollection = new CategoryCollection(
            \App\Models\Category::query()
                ->get());

        return response()->json([
            'success' => true,
            'categories' => $resourceCollection,
        ]);
    }
}
