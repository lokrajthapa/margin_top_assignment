<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'location', 'category_id'];

    // Relationship: An event belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship: An event can have many attendees
    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }


   public function getDateFormatAttribute()
   {

      return Carbon::parse($this->date)->format('l, F j');


   }
}
