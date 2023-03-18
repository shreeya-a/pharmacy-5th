<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
    ];

    public function link()
    {
        return $this->belongsTo('App\Models\VerifyUser');
    }
}