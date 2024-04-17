<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    protected $fillable = ['table_id','dish_id','qty','note','order_status'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
