<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $table = 'cruds';
    protected $fillable = ['fullname', 'username', 'email', 'password', 'role'];

    protected $hidden = [
        'password',
    ];
}
