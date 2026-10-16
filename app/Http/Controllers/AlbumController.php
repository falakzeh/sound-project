<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artist;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist')->latest()->get();

        return view('albums.index', compact('albums'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'year' => 'nullable|integer',
        ]);

        Album::create([
            'name' => $request->name,
            'artist_id' => $request->artist_id,
            'year' => $request->year,
        ]);

        return redirect()->route('albums.index')
            ->with('success', 'Album added successfully!');
    }

    public function edit(Album $album)
    {
        $artists = Artist::all();

        return view('albums.edit', compact('album', 'artists'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'year' => 'nullable|integer',
        ]);

        $album->update([
            'name' => $request->name,
            'artist_id' => $request->artist_id,
            'year' => $request->year,
        ]);

        return redirect()->route('albums.index')
            ->with('success', 'Album updated successfully!');
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index')
            ->with('success', 'Album deleted successfully!');
    }
}