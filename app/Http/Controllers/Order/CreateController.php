<?php

namespace App\Http\Controllers\Order;


use App\Http\Controllers\Controller;


use App\Http\Requests\Order\CreateRequest;
use App\Models\Basket;

use App\Models\Detail;
use App\Models\Order;
use App\Models\Product;


class CreateController extends Controller
{

    public function __invoke(CreateRequest $request)
    {
        $data = $request->validated();

        $order = Order::create([
            'user_id' => auth()->user()->id
        ]);
        $arr_product = [];

        foreach ($data['baskets_id'] as $elem){
            $product = Basket::where('id',$elem)->first();
            $arr_product[] = $product;


        }

        foreach ($arr_product as $elem){

            Detail::create([
                'order_id' => $order->id,
                'product_id' => $elem->product_id,
                'count_detail' => $elem->count_backet
            ]);

            $elem->product->update([
               'count' => $elem->product->count - $elem->count_backet
            ]);

        }
        foreach ($arr_product as $elem){
            $elem->delete();
        }


        return '{Успешно оформлен заказ}';

    }

}
