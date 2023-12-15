<?php

namespace App\Http\Controllers\Basket;


use App\Http\Controllers\Controller;
use App\Http\Resources\Basket\BasketResource;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Basket;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;


class IndexController extends Controller
{

    public function __invoke()
    {
       $baskets = auth()->user()->baskets;

       return BasketResource::collection($baskets);

    }

}
