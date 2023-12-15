<?php

namespace App\Http\Controllers\Order;


use App\Http\Controllers\Controller;


use App\Http\Requests\Order\CreateRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Basket;

use App\Models\Detail;
use App\Models\Order;


class IndexController extends Controller
{

    public function __invoke()
    {

        $orders = Order::where('user_id', auth()->user()->id)->get();
        $details = [];
        foreach ($orders as $order) {

            $details[] = $order->details;

        }


        return OrderResource::collection($details);

    }

}
