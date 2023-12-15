<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();


        $product->update($data);

        return '{Успешно отредактирован продукт!}';

    }

}
