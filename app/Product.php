<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";


    protected $fillable = [
        'product_name',
        'price',
        'description',
        'product_rate',
        'stock',
        'weight',
        'status'
    ];
}
