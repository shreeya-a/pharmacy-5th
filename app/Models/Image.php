<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','fname','lname','email','phone','address','city','country', 'image', 'status','tracking_no', 'total_price', 'discount', 'tax', 'delivery'];

    public function getUrlAttribute()
    {
        return Storage::url($this->image);
    }
        
    public function prescriptionitems()
    {
        return $this->hasMany(PrescriptionItems::class);
    }
   
}
