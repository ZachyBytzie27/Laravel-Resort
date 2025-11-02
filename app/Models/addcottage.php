<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addcottage extends Model
{
    protected $table = "addcottages";
    protected $fillable = ['cottage_type', 'cottage_name', 'price_per_day', 'quantity'];
}
