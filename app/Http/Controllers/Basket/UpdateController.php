<?php

namespace App\Http\Controllers\Basket;


use App\Http\Controllers\Controller;

use App\Http\Requests\Basket\UpdateRequest;
use App\Models\Basket;



class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request , Basket $basket)
    {

        $data = $request->validated();


        $basket->update($data);

        return '{Успешно отпредактирован товар!}';

    }

}
