<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solider extends Model
{
    use HasFactory;

    protected $fillable = [
        'militray_id',
        'degree',
        'name',
        // 'years_of_services',
        'kateba_id',
        'join_at',
        'left_in',
        'certification',
        'specialist',
        'gun_id',
        'birthdate',
        'street',
        'village',
        'country',
        'goverment',
        'hight',
        'weight',
        'phone1',
        'phone2',
        'notes',
        'image',
        'id_image',
        'militray_image'
    ];

    public function kateba()
    {
        return $this->belongsTo(Kataeb::class, 'kateba_id');
    }

    
    public function Gun()
    {
        return $this->belongsTo(Guns::class, 'gun_id');
    }
    public function getImageAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/soliders/' . $value);
    }

    public function getIdImageAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/soliders_id_images/' . $value);
    }

    public function getMilitrayImageAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/soliders_militray_images/' . $value);
    }
}
