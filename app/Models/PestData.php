<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PestData extends Model
{
    protected $primaryKey = 'data_id';
    public $timestamps = false;

    // Define the relationships
    public function pestTrap()
    {
        return $this->belongsTo(PestTraps::class, 'trap_id', 'trap_id');
    }
}
