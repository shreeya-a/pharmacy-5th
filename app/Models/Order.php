<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','fname','lname','email','phone','address','city','state','country','status','message','tracking_no','total_price',];
    
    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
