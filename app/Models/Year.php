<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    /**
     * Get all the songs belonging to this year
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    /**
     * Get all the users subscribed to given year
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
