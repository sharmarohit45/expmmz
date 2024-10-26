<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'trek_heading', 'about_trek', 'location', 'altitude', 'difficulty', 
        'best_time_to_visit', 'base_camp', 'duration', 'route', 
        'key_attraction', 'preparation_tips', 'how_to_reach', 'images', 
        'trek_times_season', 'trek_times_months'
    ];
}
