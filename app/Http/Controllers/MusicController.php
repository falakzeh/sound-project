<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function index()
    {
        $music = Music::with(['artist', 'album'])->latest()->get();

        return view('music.index', compact('music'));
    }

    public function create()
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view('music.create', compact('artists', 'albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'year' => 'nullable|integer',
            'genre' => 'nullable',
            'language' => 'nullable',
            'audio' => 'required|file|extensions:mp3,wav,ogg|max:20480',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description' => 'nullable',
        ]);

        $audioPath = $request->file('audio')->store('music', 'public');

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('music-images', 'public');
        }

        Music::create([
            'name' => $request->name,
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'year' => $request->year,
            'genre' => $request->genre,
            'language' => $request->language,
            'audio' => $audioPath,
            'image' => $imagePath,
            'description' => $request->description,
            'is_new' => $request->has('is_new'),
        ]);

        return redirect()->route('music.index')
            ->with('success', 'Music added successfully!');
    }

    public function show(Music $music)
    {
        $music->load(['artist', 'album']);

        return view('music.show', compact('music'));
    }

    public function edit(Music $music)
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view('music.edit', compact('music', 'artists', 'albums'));
    }

    public function update(Request $request, Music $music)
    {
        $request->validate([
            'name' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'year' => 'nullable|integer',
            'genre' => 'nullable',
            'language' => 'nullable',
            'audio' => 'nullable|file|extensions:mp3,wav,ogg|max:20480',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description' => 'nullable',
        ]);

        $audioPath = $music->audio;
        $imagePath = $music->image;

        if ($request->hasFile('audio')) {

            if ($music->audio && Storage::disk('public')->exists($music->audio)) {
                Storage::disk('public')->delete($music->audio);
            }

            $audioPath = $request->file('audio')->store('music', 'public');
        }

        if ($request->hasFile('image')) {

            if ($music->image && Storage::disk('public')->exists($music->image)) {
                Storage::disk('public')->delete($music->image);
            }

            $imagePath = $request->file('image')->store('music-images', 'public');
        }

        $music->update([
            'name' => $request->name,
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'year' => $request->year,
            'genre' => $request->genre,
            'language' => $request->language,
            'audio' => $audioPath,
            'image' => $imagePath,
            'description' => $request->description,
            'is_new' => $request->has('is_new'),
        ]);

        return redirect()->route('music.index')
            ->with('success', 'Music updated successfully!');
    }

    public function destroy(Music $music)
    {
        if ($music->audio && Storage::disk('public')->exists($music->audio)) {
            Storage::disk('public')->delete($music->audio);
        }

        if ($music->image && Storage::disk('public')->exists($music->image)) {
            Storage::disk('public')->delete($music->image);
        }

        $music->delete();

        return redirect()->route('music.index')
            ->with('success', 'Music deleted successfully!');
    }
}