<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'expire_at',
    ];

    // protected $casts = [
    //     'expire_at' => 'datetime',
    // ];
}
