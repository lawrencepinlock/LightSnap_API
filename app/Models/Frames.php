<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frames extends Model
{
    use HasFactory;
    protected $table = 'frames';
    protected $fillable = ['mode', 'event_name', 'frame_path'];

}
