<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;


class DeleteController extends Controller
{

    public function __invoke(Product $product)
    {



        $product->delete();

        return '{Успешно удален продукт!}';

    }

}
