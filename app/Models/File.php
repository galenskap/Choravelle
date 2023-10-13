<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'filename',
        'type',
        'song_id',
    ];

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
        if ($groups === null) {
            $tutti = new Group();
            $tutti->name = 'Tutti';
            return collect([$tutti]);
        }
        
        return $groups;
    }
}
