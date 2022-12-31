<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tune extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function song()
    {
        return $this->hasMany(Song::class);
    }
}
