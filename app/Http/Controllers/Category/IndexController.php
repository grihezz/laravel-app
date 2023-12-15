<?php

namespace App\Http\Controllers\Category;


use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;


class IndexController extends Controller
{

    public function __invoke()
    {
       $categories = Category::all();

       return CategoryResource::collection($categories);

    }

}
