<?php

namespace App\Http\Controllers;

use App\Models\Review;

class MyReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['music', 'video'])
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('admin.users.reviews.index', compact('reviews'));
    }
}