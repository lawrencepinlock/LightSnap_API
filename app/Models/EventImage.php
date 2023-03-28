<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EventImageController;

class EventImage extends Model
{
    use HasFactory;
    protected $table = 'event_images';
    protected $fillable = ['image_path','event_id'];
}
