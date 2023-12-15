<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;


class CreateController extends Controller
{

    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();

        Product::create($data);

        return '{Успешно создан продукт!}';

    }

}
