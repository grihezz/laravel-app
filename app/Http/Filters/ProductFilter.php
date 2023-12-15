<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const PRICE = 'price';
    public const SIZE = 'size';
    public const COUNT = 'count';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::PRICE => [$this, 'price'],
            self::SIZE => [$this, 'size'],
            self::COUNT => [$this, 'count'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price', $value);
    }
    public function size(Builder $builder, $value)
    {
        $builder->where('size', $value);
    }
    public function count(Builder $builder, $value)
    {
        $builder->where('count', $value);
    }
}
