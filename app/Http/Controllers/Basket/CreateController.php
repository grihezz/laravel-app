<?php

namespace App\Http\Controllers\Basket;


use App\Http\Controllers\Controller;


use App\Http\Requests\Basket\CreatRequest;
use App\Models\Basket;
use App\Models\Category;



class CreateController extends Controller
{

    public function __invoke(CreatRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;

        Basket::create($data);

        return '{Успешно добавлен товар в корзину}';

    }

}
