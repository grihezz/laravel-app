<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    protected $guarded = false;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function baskets(){
        return $this->hasMany(Basket::class);
    }
    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

}
