<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReturnSale extends Model
{
    protected $fillable = [
        'return_sale_id',
        'product_id',
        'variant_id',
        'qty',
        'sale_unit_id',
        'net_unit_price',
        'discount',
        'tax_rate',
        'tax',
        'total'
    ];

    public function returnSale()
    {
        return $this->belongsTo(ReturnSale::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
