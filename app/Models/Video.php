<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist_id',
        'album_id',
        'year',
        'genre',
        'language',
        'description',
        'video',
        'image',
        'is_new',
    ];

    protected $casts = [
        'is_new' => 'boolean',
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