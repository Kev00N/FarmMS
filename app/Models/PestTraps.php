<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PestTraps extends Model
{
    protected $primaryKey = 'trap_id';
    public $timestamps = false;

    // Define the relationships
    public function pestData()
    {
        return $this->hasMany(PestData::class, 'trap_id', 'trap_id');
    }
}
