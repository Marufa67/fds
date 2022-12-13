<?php

namespace App\Models;
use App\Models\Delivery_man;
use App\Models\User;
use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $fillable = ['name'];
    protected $guarded = [];
    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function delivery_man()
    {
        return $this->belongsTo(Delivery_man::class, 'delivery_man_id', 'id');
    }

}
