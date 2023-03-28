<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $fillable = ['message'];

    // A message belongs to a user
    public function users()
    {
        return $this -> belongsTo(User::class);
    }
}
