<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guns extends Model
{
    use HasFactory;
    protected $fillable = [
        'gun_name'
    ];
}
