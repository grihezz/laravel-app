<?php

namespace App\Http\Controllers\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;


class DeleteController extends Controller
{

    public function __invoke(Category $category)
    {



        $category->delete();

        return '{Успешно удалена категория!}';

    }

}
