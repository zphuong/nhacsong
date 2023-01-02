<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tune()
    {
        return $this->belongsTo(Tune::class);
    }
    public function tone()
    {
        return $this->hasOne(Tone::class);
    }
    public function slide()
    {
        return $this->hasOne(Slide::class);
    }
}
