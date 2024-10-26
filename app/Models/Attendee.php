<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'event_id'];

    // Relationship: An attendee belongs to an event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}