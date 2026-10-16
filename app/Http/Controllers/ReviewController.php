<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'music_id' => 'nullable|exists:music,id',
            'video_id' => 'nullable|exists:videos,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        if (!$request->music_id && !$request->video_id) {
            return back()->withErrors([
                'review' => 'Please select a music or video.'
            ]);
        }

        Review::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'music_id' => $request->music_id,
                'video_id' => $request->video_id,
            ],
            [
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );

        return back()->with('success', 'Review and rating saved successfully!');
    }

    public function update(Request $request, Review $review)
    {
        if ($review->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access.');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        $review->update([
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return back()->with('success', 'Review and rating updated successfully!');
    }

    public function destroy(Review $review)
    {
        if ($review->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access.');
        }

        $review->delete();

        return back()->with('success', 'Review deleted successfully!');
    }
}