<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_plan',
        'end_plan',
        'type_of_plan',
        'subject',
        'desction',
        'notes'
    ];


    public function kataeabs()
    {
        return $this->hasMany(PlanKateaps::class, 'plan_id', 'id');
    }

    public function attachments()
    {
        return $this->hasMany(PlanAttachments::class);
    }
}
