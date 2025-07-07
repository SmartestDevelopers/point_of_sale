<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    protected $fillable = [
        'sale_id',
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

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
