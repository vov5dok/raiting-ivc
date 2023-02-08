<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'meeting_id',
        'point',
    ];
}
