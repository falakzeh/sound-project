<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;

class UserMusicController extends Controller
{
    public function index(Request $request)
    {
        $query = Music::with(['artist', 'album']);

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('genre', 'like', '%' . $search . '%')
                    ->orWhere('language', 'like', '%' . $search . '%')
                    ->orWhere('year', 'like', '%' . $search . '%')
                    ->orWhereHas('artist', function ($artistQuery) use ($search) {
                        $artistQuery->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('album', function ($albumQuery) use ($search) {
                        $albumQuery->where('name', 'like', '%' . $search . '%');
                    });
            });
        }

        if ($request->filled('artist')) {
            $query->where('artist_id', $request->artist);
        }

        if ($request->filled('album')) {
            $query->where('album_id', $request->album);
        }

        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }

        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        if ($request->filled('language')) {
            $query->where('language', $request->language);
        }

        $music = $query->latest()->get();

        $artists = Artist::orderBy('name')->get();

        $albums = Album::orderBy('name')->get();

        $years = Music::whereNotNull('year')
            ->where('year', '!=', '')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year');

        $genres = Music::whereNotNull('genre')
            ->where('genre', '!=', '')
            ->distinct()
            ->orderBy('genre')
            ->pluck('genre');

        $languages = Music::whereNotNull('language')
            ->where('language', '!=', '')
            ->distinct()
            ->orderBy('language')
            ->pluck('language');

        return view('admin.users.music.index', compact(
            'music',
            'artists',
            'albums',
            'years',
            'genres',
            'languages'
        ));
    }
}