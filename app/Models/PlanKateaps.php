<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanKateaps extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'kateapa_id',
        'day'
    ];


    public function Plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function katepa()
    {
        return $this->belongsTo(Kataeb::class, 'kateapa_id');
    }
}
