<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
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
        'sale_status',
        'payment_status',
        'document',
        'paid_amount',
        'sale_note',
        'staff_note'
    ];

    public function productSales()
    {
        return $this->hasMany(ProductSale::class);
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
