<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Album;

class Music extends Model
{
    protected $fillable = [
        'name',
        'artist_id',
        'album_id',
        'year',
        'genre',
        'language',
        'audio',
        'image',
        'description',
        'is_new',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}