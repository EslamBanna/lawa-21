<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $fillable = [
        'militray_id',
        'old_id',
        'degree_id',
        'name',
        'kateba_id',
        'join_at',
        'job',
        'university',
        'specialist',
        'officer_type',
        'gun_id',
        'gun_number',
        'birthdate',
        'street',
        'village',
        'country',
        'goverment',
        'hight',
        'weight',
        // 'tamam',
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
        return ($value == null ? '' : $actual_link . 'images/officers/' . $value);
    }

    public function getIdImageAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/officers_id_images/' . $value);
    }

    public function getMilitrayImageAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/officers_militray_images/' . $value);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class, 'degree_id');
    }
}
