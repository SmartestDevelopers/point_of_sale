<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnSale extends Model
{
    protected $fillable = [
        'reference_no',
        'user_id',
        'customer_id',
        'warehouse_id',
        'biller_id',
        'item',
        'total_qty',
        'total_discount',
        'total_tax',
        'total_price',
        'grand_total',
        'order_tax_rate',
        'order_tax',
        'order_discount',
        'shipping_cost',
        'document',
        'return_note',
        'staff_note'
    ];

    public function productReturnSales()
    {
        return $this->hasMany(ProductReturnSale::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
