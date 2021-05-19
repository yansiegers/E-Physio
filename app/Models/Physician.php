<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;

    /**
     * Get the meetings for the physician.
     */
    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
}
