<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * Get all the users belonging to this group
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all the files related to this group
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
