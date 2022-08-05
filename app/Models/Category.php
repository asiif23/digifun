<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function leader()
    {
        return $this->hasMany(Leader::class, 'category_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'category_id');
    }
}
