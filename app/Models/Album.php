<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;

class Album extends Model
{
    protected $fillable = [
        'name',
        'artist_id',
        'year',
    ];
    public function artist()
    {
        return
        $this->belongsTo(Artist::class);
    }
}
