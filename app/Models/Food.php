<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'category_id',
        'description',
        'rating',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}