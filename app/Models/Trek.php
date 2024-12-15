<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trek extends Model
{
    use HasFactory;
    protected $fillable = [
        'trek_heading', 'price', 'about_trek', 'location', 'altitude','trekDetails', 'difficulty',
        'best_time_to_visit', 'base_camp', 'duration', 'route', 'key_attraction','Itnery_tips',
        'preparation_tips', 'how_to_reach', 'image_paths', 'trek_times_season', 'trek_times_months'
    ];

    protected $casts = [
        'route' => 'array',
        'key_attraction' => 'array',
        'preparation_tips' => 'array',
        'how_to_reach' => 'array',
        'image_paths' => 'array',
        'Itnery_tips' => 'array'
    ];
}
