<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    /**
     * Get the user that belongs to the meeting.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the physician that owns the meeting.
     */
    public function physician()
    {
        return $this->belongsTo(Physician::class);
    }
}
