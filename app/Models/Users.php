<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'email'];

    public function usersMessage(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
