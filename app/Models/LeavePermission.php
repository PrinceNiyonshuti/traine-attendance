<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeavePermission extends Model
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
    protected $casts = [];

    /**
     * Get the leave category the leave permission belongs to.
     */
    public function leave()
    {
        return $this->belongsTo(Leave::class);
    }

    /**
     * Get the trainee the leave permission belongs to.
     */
    public function trainee()
    {
        return $this->belongsTo(Trainee::class);
    }
}
