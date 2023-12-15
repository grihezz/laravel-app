<?php

namespace App\Http\Controllers\Category;


use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreatRequest;

use App\Models\Category;



class CreateController extends Controller
{

    public function __invoke(CreatRequest $request)
    {
        $data = $request->validated();

        Category::create($data);

        return '{Успешно создана категория!}';

    }

}
