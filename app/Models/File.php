<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
     * Get the song this file is about
     */
    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    /**
     * Get the group(s) this file concerns
     */
    public function groups()
    {
        $groups = $this->belongsToMany(\App\Models\Group::class);
        // if no groups are found, return a collection of one virtual default group
        // if ($groups === null) {
        //     $tutti = new Group();
        //     $tutti->name = 'Tutti';
        //     return collect([$tutti]);
        // }
    }
}
