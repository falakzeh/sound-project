<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Music Library - SOUND Group</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #0b0b12;
            color: white;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 245px;
            height: 100vh;
            background: linear-gradient(180deg, #151525, #0d0d15);
            border-right: 1px solid #29293d;
            padding: 25px 18px;
            overflow-y: auto;
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 30px;
        }

        .logo span {
            color: #9b5cff;
        }

        .profile-icon {
            width: 65px;
            height: 65px;
            margin: auto;
            border-radius: 50%;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 0 25px rgba(139, 92, 246, 0.35);
        }

        .profile-name {
            text-align: center;
            color: #ddd;
            margin: 12px 0 30px;
            font-size: 14px;
        }

        .menu-title {
            color: #77778a;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 20px 8px 10px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 7px;
            border-radius: 9px;
            color: #bdbdca;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .menu-link:hover,
        .menu-link.active {
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 7px 20px rgba(113, 60, 255, 0.25);
        }

        .logout-btn {
            width: 100%;
            margin-top: 18px;
            padding: 12px;
            border-radius: 9px;
            background: #171724;
            border: 1px solid #303044;
            color: #ddd;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: #9b5cff;
            color: white;
        }

        .main {
            margin-left: 245px;
            min-height: 100vh;
            padding: 35px;
        }

        .page-title {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .page-subtitle {
            color: #858596;
            margin-bottom: 30px;
        }

        .filter-box {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 22px;
            margin-bottom: 28px;
            scroll-margin-top: 25px;
        }

        .filter-title {
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .search-box {
            width: 100%;
            padding: 13px 15px;
            background: #0d0d16;
            border: 1px solid #303044;
            border-radius: 9px;
            color: white;
            outline: none;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .search-box:focus,
        select:focus {
            border-color: #9b5cff;
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        select {
            width: 100%;
            padding: 13px 14px;
            background: #0d0d16;
            border: 1px solid #303044;
            border-radius: 9px;
            color: white;
            outline: none;
            font-size: 14px;
        }

        select option {
            background: #151525;
            color: white;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 16px;
        }

        .apply-btn {
            padding: 11px 22px;
            border: none;
            border-radius: 9px;
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .clear-btn {
            padding: 11px 22px;
            border-radius: 9px;
            background: #202031;
            border: 1px solid #35354a;
            color: #ddd;
            text-decoration: none;
            font-weight: bold;
        }

        .results {
            color: #858596;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .music-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            width: 100%;
        }

        .music-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            overflow: hidden;
            transition: 0.3s;
            position: relative;
        }

        .music-card:hover {
            transform: translateY(-5px);
            border-color: #7547ff;
            box-shadow: 0 15px 35px rgba(113, 60, 255, 0.15);
        }

        .music-image {
            width: 100%;
            height: 190px;
            object-fit: contain;
            background: #0d0d16;
            display: block;
        }

        .no-image {
            width: 100%;
            height: 190px;
            background: linear-gradient(135deg, #1e1e32, #292945);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 55px;
        }

        .music-info {
            padding: 18px;
        }

        .music-name {
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .artist {
            color: #a78bfa;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-bottom: 13px;
        }

        .tag {
            background: #202033;
            border: 1px solid #303047;
            color: #aaaabd;
            padding: 5px 8px;
            border-radius: 6px;
            font-size: 11px;
        }

        .description {
            color: #9292a5;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 14px;
        }

        audio {
            width: 100%;
            height: 38px;
        }

        .new-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: linear-gradient(90deg, #ff3d81, #9b5cff);
            color: white;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: .5px;
            z-index: 5;
            box-shadow: 0 4px 15px rgba(155, 92, 255, .35);
            animation: flashNew 1s infinite;
        }

        @keyframes flashNew {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(1.05);
            }
        }

        .review-box {
            margin-top: 18px;
            padding-top: 18px;
            border-top: 1px solid #29293d;
        }

        .review-title {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .stars {
            display: flex;
            gap: 5px;
            margin-bottom: 12px;
        }

        .stars input {
            display: none;
        }

        .stars label {
            font-size: 25px;
            color: #4b4b5d;
            cursor: pointer;
            transition: 0.2s;
        }

        .stars label:hover {
            color: #f5c542;
        }

        .rating-select {
            width: 100%;
            margin-bottom: 10px;
        }

        .review-input {
            width: 100%;
            min-height: 80px;
            resize: vertical;
            padding: 11px;
            background: #0d0d16;
            border: 1px solid #303044;
            border-radius: 9px;
            color: white;
            outline: none;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        .review-input:focus {
            border-color: #9b5cff;
        }

        .review-submit {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .review-submit:hover {
            opacity: 0.9;
        }

        .existing-reviews {
            margin-top: 18px;
        }

        .existing-title {
            color: #aaaabd;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .review-item {
            background: #0e0e18;
            border: 1px solid #29293d;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 9px;
        }

        .review-user {
            color: #c4a7ff;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .review-stars {
            color: #f5c542;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .review-text {
            color: #aaaabd;
            font-size: 12px;
            line-height: 1.5;
        }

        .review-actions {
            display: flex;
            gap: 8px;
            margin-top: 9px;
        }

        .edit-review-btn,
        .delete-review-btn {
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 11px;
            cursor: pointer;
        }

        .edit-review-btn {
            background: #25203a;
            border: 1px solid #6941a8;
            color: #cdb5ff;
        }

        .delete-review-btn {
            background: #301a25;
            border: 1px solid #713044;
            color: #ff9db8;
        }

        .success-message {
            background: #152b24;
            border: 1px solid #28775c;
            color: #7ee2bd;
            padding: 12px 15px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #321a23;
            border: 1px solid #773344;
            color: #ff9db8;
            padding: 12px 15px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .empty {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 60px 20px;
            text-align: center;
            color: #88889b;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 12px;
        }

        @media(max-width: 1000px) {
            .music-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media(max-width: 850px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }

            .filter-grid {
                grid-template-columns: 1fr;
            }

            .music-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media(max-width: 650px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            music-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">

        <div class="logo">
            SOUND<span>GROUP</span>
        </div>

        <div class="profile-icon">
            👤
        </div>

        <div class="profile-name">
            {{ auth()->user()->name }}
        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <a href="{{ route('dashboard') }}" class="menu-link">
            🏠
            Dashboard
        </a>

        <a href="{{ route('user.music') }}" class="menu-link active">
            🎵
            Music
        </a>

        <a href="{{ route('user.videos') }}" class="menu-link">
            🎬
            Videos
        </a>

        <a href="#music-search" class="menu-link">
            🔍
            Search
        </a>

        <a href="{{ route('user.reviews') }}" class="menu-link">
            ⭐
            My Reviews & Ratings
        </a>

        <a href="{{ route('profile.edit') }}" class="menu-link">
            👤
            My Profile
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="logout-btn">
                🚪 Logout
            </button>
        </form>

    </div>


    <div class="main">

        <div class="page-title">
            🎵 Music Library
        </div>

        <div class="page-subtitle">
            Explore songs by artist, album, year, genre and language
        </div>


        @if(session('success'))

            <div class="success-message">
                {{ session('success') }}
            </div>

        @endif


        @if($errors->any())

            <div class="error-message">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        <div class="filter-box" id="music-search">

            <div class="filter-title">
                🔎 Search & Filter Music
            </div>

            <form method="GET" action="{{ route('user.music') }}">

                <input type="text" name="search" class="search-box"
                    placeholder="Search by song, artist, album, year, genre or language..."
                    value="{{ request('search') }}">

                <div class="filter-grid">

                    <select name="artist">

                        <option value="">
                            All Artists
                        </option>

                        @foreach($artists as $artist)

                            <option value="{{ $artist->id }}" {{ request('artist') == $artist->id ? 'selected' : '' }}>
                                {{ $artist->name }}
                            </option>

                        @endforeach

                    </select>


                    <select name="album">

                        <option value="">
                            All Albums
                        </option>

                        @foreach($albums as $album)

                            <option value="{{ $album->id }}" {{ request('album') == $album->id ? 'selected' : '' }}>
                                {{ $album->name }}
                            </option>

                        @endforeach

                    </select>


                    <select name="year">

                        <option value="">
                            All Years
                        </option>

                        @foreach($years as $year)

                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                {{ $year }}
                            </option>

                        @endforeach

                    </select>


                    <select name="genre">

                        <option value="">
                            All Genres
                        </option>

                        @foreach($genres as $genre)

                            <option value="{{ $genre }}" {{ request('genre') == $genre ? 'selected' : '' }}>
                                {{ $genre }}
                            </option>

                        @endforeach

                    </select>


                    <select name="language">

                        <option value="">
                            All Languages
                        </option>

                        @foreach($languages as $language)

                            <option value="{{ $language }}" {{ request('language') == $language ? 'selected' : '' }}>
                                {{ $language }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="buttons">

                    <button type="submit" class="apply-btn">
                        🔎 Apply Filters
                    </button>

                    <a href="{{ route('user.music') }}" class="clear-btn">
                        ✕ Clear
                    </a>

                </div>

            </form>

        </div>


        <div class="results">
            Showing {{ $music->count() }} music result(s)
        </div>


        @if($music->count() > 0)

            <div class="music-grid">

                @foreach($music as $song)

                    <div class="music-card">

                        @if(
                                $song->is_new &&
                                $song->created_at &&
                                $song->created_at->gt(now()->subDays(7))
                            )

                            <span class="new-badge">
                                🆕 NEW
                            </span>

                        @endif


                        @if($song->image)

                            <img src="{{ asset('storage/' . $song->image) }}" class="music-image" alt="{{ $song->name }}">

                        @else

                            <div class="no-image">
                                🎵
                            </div>

                        @endif


                        <div class="music-info">

                            <div class="music-name">
                                {{ $song->name }}
                            </div>

                            <div class="artist">

                                🎤

                                @if($song->artist)
                                    {{ $song->artist->name }}
                                @else
                                    Unknown Artist
                                @endif

                            </div>


                            <div class="tags">

                                @if($song->album)

                                    <span class="tag">
                                        💿 {{ $song->album->name }}
                                    </span>

                                @endif


                                @if($song->year)

                                    <span class="tag">
                                        📅 {{ $song->year }}
                                    </span>

                                @endif

                                @if($song->genre)

                                    <span class="tag">
                                        🎼 {{ $song->genre }}
                                    </span>

                                @endif


                                @if($song->language)

                                    <span class="tag">
                                        🌐 {{ $song->language }}
                                    </span>

                                @endif

                            </div>


                            @if($song->description)

                                <div class="description">
                                    {{ $song->description }}
                                </div>

                            @endif


                            @if($song->audio)

                                <audio controls>

                                    <source src="{{ asset('storage/' . $song->audio) }}" type="audio/mpeg">

                                    Your browser does not support audio playback.

                                </audio>

                            @endif


                            <div class="review-box">

                                <div class="review-title">
                                    ⭐ Rate & Review
                                </div>


                                <form method="POST" action="{{ route('reviews.store') }}">

                                    @csrf

                                    <input type="hidden" name="music_id" value="{{ $song->id }}">


                                    <select name="rating" class="rating-select" required>

                                        <option value="">
                                            Select Rating
                                        </option>

                                        <option value="5">
                                            ★★★★★ 5 Stars
                                        </option>

                                        <option value="4">
                                            ★★★★☆ 4 Stars
                                        </option>

                                        <option value="3">
                                            ★★★☆☆ 3 Stars
                                        </option>

                                        <option value="2">
                                            ★★☆☆☆ 2 Stars
                                        </option>

                                        <option value="1">
                                            ★☆☆☆☆ 1 Star
                                        </option>

                                    </select>


                                    <textarea name="comment" class="review-input" placeholder="Write your review..."
                                        required></textarea>


                                    <button type="submit" class="review-submit">
                                        ⭐ Submit Review
                                    </button>

                                </form>


                                @if($song->reviews && $song->reviews->count())

                                    <div class="existing-reviews">

                                        <div class="existing-title">
                                            Reviews
                                        </div>


                                        @foreach($song->reviews as $review)

                                            <div class="review-item">

                                                <div class="review-user">
                                                    {{ $review->user->name ?? 'User' }}
                                                </div>

                                                <div class="review-stars">

                                                    @for($i = 1; $i <= 5; $i++)

                                                        @if($i <= $review->rating)
                                                            ★
                                                        @else
                                                            ☆
                                                        @endif

                                                    @endfor

                                                </div>


                                                @if($review->comment)

                                                    <div class="review-text">
                                                        {{ $review->comment }}
                                                    </div>

                                                @endif


                                                @if($review->user_id == auth()->id())

                                                    <div class="review-actions">

                                                        <a href="{{ route('user.reviews') }}" class="edit-review-btn">
                                                            ✏️ Edit
                                                        </a>


                                                        <form method="POST" action="{{ route('reviews.destroy', $review->id) }}">

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="delete-review-btn"
                                                                onclick="return confirm('Are you sure you want to delete this review?')">
                                                                🗑️ Delete
                                                            </button>

                                                        </form>

                                                    </div>

                                                @endif

                                            </div>

                                        @endforeach

                                    </div>

                                @endif

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">

                <div class="empty-icon">
                    🎵
                </div>

                <div>
                    No music found.
                </div>

            </div>

        @endif

    </div>

</body>

</html>