<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteSettingController;
use App\Http\Controllers\UserMusicController;
use App\Http\Controllers\UserVideoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MyReviewController;

use App\Models\Music;
use App\Models\Video;
use App\Models\Review;


Route::get('/', function () {
    return redirect()->route('login');
});



Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {
            return view('admin.dashboard');
        }

        $musicCount = Music::count();

        $videoCount = Video::count();

        $myReviews = Review::where('user_id', auth()->id())
            ->count();

        $myRatings = Review::where('user_id', auth()->id())
            ->whereNotNull('rating')
            ->count();

        $latestMusic = Music::with(['artist', 'album'])
            ->latest()
            ->take(5)
            ->get();

        $latestVideos = Video::with(['artist', 'album'])
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'musicCount',
            'videoCount',
            'myReviews',
            'myRatings',
            'latestMusic',
            'latestVideos'
        ));

    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    Route::get('/user/music', [UserMusicController::class, 'index'])
        ->name('user.music');

    Route::get('/user/videos', [UserVideoController::class, 'index'])
        ->name('user.videos');


    Route::post('/reviews', [ReviewController::class, 'store'])
        ->name('reviews.store');

    Route::put('/reviews/{review}', [ReviewController::class, 'update'])
        ->name('reviews.update');

    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])
        ->name('reviews.destroy');


    Route::get('/user/reviews', [MyReviewController::class, 'index'])
        ->name('user.reviews');


    Route::middleware([
        \App\Http\Middleware\AdminMiddleware::class
    ])->group(function () {

        Route::resource('artists', ArtistController::class);

        Route::resource('albums', AlbumController::class);

        Route::resource('music', MusicController::class);

        Route::resource('videos', VideoController::class);


        Route::resource('admin/users', UserController::class)->names([
            'index' => 'admin.users',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'show' => 'admin.users.show',
            'edit' => 'admin.users.edit',
            'update' => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]);


        Route::get('/admin/settings', [WebsiteSettingController::class, 'index'])
            ->name('admin.settings');

        Route::put('/admin/settings', [WebsiteSettingController::class, 'update'])
            ->name('admin.settings.update');

    });

});


require base_path('routes/auth.php');