<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promodoroSession extends Model
{
    protected $fillable = [
        'user_id',
        'start_time',
        'end_time',
        'duration',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
