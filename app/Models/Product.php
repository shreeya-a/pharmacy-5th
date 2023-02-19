<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable= ['product','price','image','description','category_id','section_id','featured','popular','prescribed'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
                                                // foreign key  //primary key value of used foreign key
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id','id');
                                              
    }


}
