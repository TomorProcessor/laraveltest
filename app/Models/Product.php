<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function owner()
    {
        //alapból user_id lenne a foreign_key, azért adom itt meg, hogy most más
        return $this->belongsTo(User::class, 'owner_id');
    }

    protected $fillable = [
        'name'
    ];
}
