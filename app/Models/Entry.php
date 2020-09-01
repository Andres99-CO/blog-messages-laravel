<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // $entry->user
    // Entry N - 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
