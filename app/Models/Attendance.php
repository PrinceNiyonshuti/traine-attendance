<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [ ];


    /**
     * Get the attended trainee the attendance records belongs to.
     */
    public function attendedTrainee()
    {
        return $this->belongsTo(Trainee::class);
    }

    /**
     * Get the attended trainee the attendance records belongs to.
     */
    public function network()
    {
        return $this->belongsTo(Networks::class);
    }

}
