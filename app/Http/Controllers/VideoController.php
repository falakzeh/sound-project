<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with(['artist', 'album'])
            ->latest()
            ->get();

        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view('videos.create', compact('artists', 'albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'album_id' => 'nullable|exists:albums,id',
            'year' => 'nullable|string|max:4',
            'genre' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'video' => 'nullable|file|mimes:mp4,webm,ogg|max:51200',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'is_new' => 'nullable|boolean',
        ]);

        $data = $request->only([
            'title',
            'artist_id',
            'album_id',
            'year',
            'genre',
            'language',
            'description',
        ]);

        $data['is_new'] = $request->has('is_new');

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')
                ->store('videos', 'public');
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('video-images', 'public');
        }

        Video::create($data);

        return redirect()
            ->route('videos.index')
            ->with('success', 'Video added successfully!');
    }

    public function show(Video $video)
    {
        $video->load(['artist', 'album']);

        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view(
            'videos.edit',
            compact('video', 'artists', 'albums')
        );
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'album_id' => 'nullable|exists:albums,id',
            'year' => 'nullable|string|max:4',
            'genre' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'video' => 'nullable|file|mimes:mp4,webm,ogg|max:51200',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'is_new' => 'nullable|boolean',
        ]);

        $data = $request->only([
            'title',
            'artist_id',
            'album_id',
            'year',
            'genre',
            'language',
            'description',
        ]);

        $data['is_new'] = $request->has('is_new');

        $data['video'] = $video->video;
        $data['image'] = $video->image;

        if ($request->hasFile('video')) {

            if (
                $video->video &&
                Storage::disk('public')->exists($video->video)
            ) {
                Storage::disk('public')->delete($video->video);
            }

            $data['video'] = $request->file('video')
                ->store('videos', 'public');
        }

        if ($request->hasFile('image')) {

            if (
                $video->image &&
                Storage::disk('public')->exists($video->image)
            ) {
                Storage::disk('public')->delete($video->image);
            }

            $data['image'] = $request->file('image')
                ->store('video-images', 'public');
        }

        $video->update($data);

        return redirect()
            ->route('videos.index')
            ->with('success', 'Video updated successfully!');
    }

    public function destroy(Video $video)
    {
        if (
            $video->video &&
            Storage::disk('public')->exists($video->video)
        ) {
            Storage::disk('public')->delete($video->video);
        }

        if (
            $video->image &&
            Storage::disk('public')->exists($video->image)
        ) {
            Storage::disk('public')->delete($video->image);
        }

        $video->delete();

        return redirect()
            ->route('videos.index')
            ->with('success', 'Video deleted successfully!');
    }
}