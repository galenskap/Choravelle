<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'year_id',
    ];

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
