<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;

    /**
     * Get the user that belongs to the physician.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the meetings for the physician.
     */
    public function meetings()
    {
        return $this->hasMany(Meeting::class);
    }
}
