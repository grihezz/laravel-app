<?php

namespace App\Http\Controllers\Basket;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Basket;
use App\Models\Category;
use App\Models\Product;


class DeleteController extends Controller
{
    public function __invoke(Basket $basket)
    {
        $basket->delete();
        return '{Успешно удален товар!}';
    }
}
