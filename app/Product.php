<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'id','user_id', 'description', 'created_at', 'updated_at',
    ];
}
