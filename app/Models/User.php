<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the group for the user.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get all the users subscription statuses
     */
    public function years()
    {
        return $this->belongsToMany(Year::class)->withPivot('status');
    }

    /**
     * Get the user subscription status (for a given year)
     */
    public function subscription($year_id)
    {
        return $this->hasOne(Year::class)->where('year_id', $year_id)->withPivot('status');
    }
}
