<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'file_name'
    ];
    public function song(){
        return $this->hasOne(Song::class);
    }
}
