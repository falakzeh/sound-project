<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;

class UserVideoController extends Controller
{
    public function index(Request $request)
    {
        $query = Video::with(['artist', 'album']);

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('genre', 'like', '%' . $search . '%')
                    ->orWhere('language', 'like', '%' . $search . '%')
                    ->orWhere('year', 'like', '%' . $search . '%')

                    ->orWhereHas('artist', function ($artistQuery) use ($search) {
                        $artistQuery->where(
                            'name',
                            'like',
                            '%' . $search . '%'
                        );
                    })

                    ->orWhereHas('album', function ($albumQuery) use ($search) {
                        $albumQuery->where(
                            'name',
                            'like',
                            '%' . $search . '%'
                        );
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

        $videos = $query->latest()->get();

        $artists = Artist::orderBy('name')->get();

        $albums = Album::orderBy('name')->get();

        $years = Video::whereNotNull('year')
            ->where('year', '!=', '')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year');

        $genres = Video::whereNotNull('genre')
            ->where('genre', '!=', '')
            ->distinct()
            ->orderBy('genre')
            ->pluck('genre');

        $languages = Video::whereNotNull('language')
            ->where('language', '!=', '')
            ->distinct()
            ->orderBy('language')
            ->pluck('language');

        return view(
            'admin.users.videos.index',
            compact(
                'videos',
                'artists',
                'albums',
                'years',
                'genres',
                'languages'
            )
        );
    }
}