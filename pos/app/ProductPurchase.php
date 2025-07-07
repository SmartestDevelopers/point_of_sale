<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    protected $fillable = [
        'purchase_id',
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

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
