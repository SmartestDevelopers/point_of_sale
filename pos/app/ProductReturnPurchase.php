<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReturnPurchase extends Model
{
    protected $fillable = [
        'return_purchase_id',
        'product_id',
        'variant_id',
        'qty',
        'purchase_unit_id',
        'net_unit_cost',
        'discount',
        'tax_rate',
        'tax',
        'total'
    ];

    public function returnPurchase()
    {
        return $this->belongsTo(ReturnPurchase::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
