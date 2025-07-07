<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnPurchase extends Model
{
    protected $fillable = [
        'reference_no',
        'user_id',
        'supplier_id',
        'warehouse_id',
        'item',
        'total_qty',
        'total_discount',
        'total_tax',
        'total_cost',
        'order_tax_rate',
        'order_tax',
        'grand_total',
        'document',
        'return_note',
        'staff_note'
    ];

    public function productReturnPurchases()
    {
        return $this->hasMany(ProductReturnPurchase::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
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
