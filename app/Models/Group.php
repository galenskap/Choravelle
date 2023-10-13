<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

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
