<?php

namespace App\Models;

use App\Models\Dish;
use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['table_id','dish_id','qty','note'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
