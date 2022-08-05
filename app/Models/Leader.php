<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function player()
    {
        return $this->hasMany(Player::class, 'leader_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'leader_id');
    }
}
