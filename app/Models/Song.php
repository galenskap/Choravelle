<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    /**
     * Get the year this song belongs to
     */
    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    /**
     * Get all the files related to this song
     */
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
