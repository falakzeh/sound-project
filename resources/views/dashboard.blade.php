<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOUND Group | User Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0b12;
            color: #ffffff;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 245px;
            background: linear-gradient(180deg, #151525, #0d0d15);
            border-right: 1px solid #29293d;
            padding: 25px 16px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 35px;
            letter-spacing: 1px;
        }

        .logo span {
            color: #9b5cff;
        }

        .profile-box {
            background: #1c1c2d;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: center;
        }

        .profile-icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #713cff, #ff3d81);
            font-size: 23px;
        }

        .profile-box h3 {
            font-size: 14px;
            margin-bottom: 4px;
        }

        .profile-box p {
            color: #9b5cff;
            font-size: 11px;
        }

        .menu-title {
            color: #77778b;
            font-size: 11px;
            text-transform: uppercase;
            margin: 20px 10px 10px;
            letter-spacing: 1px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .menu a {
            padding: 13px 14px;
            border-radius: 11px;
            color: #bdbdca;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 11px;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            color: white;
            background: linear-gradient(90deg, #713cff, #9b5cff);
        }

        .logout {
            margin-top: 25px;
            width: 100%;
            border: 1px solid #29293d;
            background: #151525;
            color: #ff6b9d;
            padding: 12px;
            border-radius: 11px;
            cursor: pointer;
            font-size: 13px;
        }

        .main {
            margin-left: 245px;
            width: calc(100% - 245px);
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 28px;
            margin-bottom: 7px;
        }

        .topbar p {
            color: #88889a;
            font-size: 13px;
        }

        .welcome-badge {
            background: #18182a;
            border: 1px solid #29293d;
            padding: 10px 15px;
            border-radius: 30px;
            color: #cfcfe0;
            font-size: 12px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .stat-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 17px;
            padding: 22px;
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .stat-card h2 {
            font-size: 27px;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #858597;
            font-size: 12px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 17px;
        }

        .section-header h2 {
            font-size: 20px;
        }

        .view-all {
            color: #a875ff;
            font-size: 12px;
        }

        .music-grid,
        .video-grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 18px;
            width: 100%;

        }

        .media-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 17px;
            overflow: hidden;
            position: relative;
            width: 100%;
            min-width: 0;
        }

        .music-grid .media-card:nth-child(4),
        .video-grid .media-card:nth-child(4) {
            grid-column: 2 / span 2;
        }

        .music-grid .media-card:nth-child(5),
        .video-grid .media-card:nth-child(5) {
            grid-column: 4 / span 2;
        }

        .music-grid .media-card,
        .video-grid .media-card {
            grid-column: span 2;
        }

        .media-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
            background: #10101b;
        }



        .video-grid .media-card {
            background: linear-gradient(145deg, #171727, #11111b);
            border: 1px solid #29293d;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            transition: .3s ease;
        }

        .video-grid .media-card:hover {
            transform: translateY(-5px);
            border-color: #7146c9;
            box-shadow: 0 15px 35px rgba(113, 60, 255, .18);
        }


        .video-cover {
            height: 160px;
            position: relative;
            overflow: hidden;

            background:
                radial-gradient(circle at 20% 20%,
                    rgba(155, 92, 255, .35),
                    transparent 35%),
                radial-gradient(circle at 80% 80%,
                    rgba(236, 72, 153, .25),
                    transparent 35%),
                linear-gradient(135deg,
                    #24184a,
                    #151525 60%,
                    #20132e);

            display: flex;
            align-items: center;
            justify-content: center;
        }


        .video-cover::before {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
        }

        .video-cover::after {
            content: "";
            position: absolute;
            width: 125px;
            height: 125px;
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 50%;
        }


        .video-play-icon {
            width: 65px;
            height: 65px;
            border-radius: 50%;

            background: linear-gradient(135deg,
                    #713cff,
                    #ec4899);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 25px;
            padding-left: 4px;

            box-shadow:
                0 0 30px rgba(155, 92, 255, .45);

            position: relative;
            z-index: 2;

            transition: .3s;
        }

        .video-grid .media-card:hover .video-play-icon {
            transform: scale(1.08);
            box-shadow:
                0 0 40px rgba(155, 92, 255, .65);
        }


        .video-grid .media-content video {
            width: 100%;
            height: 190px;
            background: #000;
            border-radius: 9px;
            margin-top: 5px;
        }


        @media (max-width: 600px) {

            .video-cover {
                height: 180px;
            }

            .video-grid .media-content video {
                height: 200px;
            }
        }



        .media-content {
            padding: 18px;
        }

        .media-content h3 {
            font-size: 17px;
            margin-bottom: 7px;
        }

        .artist {
            color: #a875ff;
            font-size: 12px;
            margin-bottom: 9px;
        }

        .description {
            color: #9292a3;
            font-size: 12px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .badges {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 14px;
        }

        .badge {
            background: #202034;
            border: 1px solid #303047;
            color: #bdbdd0;
            padding: 5px 8px;
            border-radius: 7px;
            font-size: 10px;
        }

        audio,
        video {
            width: 100%;
            border-radius: 8px;
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

        .empty {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 17px;
            padding: 35px;
            text-align: center;
            color: #77778b;
            font-size: 13px;
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .quick-link {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 18px;
            text-align: center;
            transition: .2s;
        }

        .quick-link:hover {
            border-color: #713cff;
            transform: translateY(-2px);
        }

        .quick-link-icon {
            font-size: 25px;
            margin-bottom: 9px;
        }

        .quick-link h3 {
            font-size: 13px;
            margin-bottom: 5px;
        }

        .quick-link p {
            color: #77778b;
            font-size: 10px;
        }

        @media (max-width: 1100px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-links {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
                padding: 22px;
            }

            .music-grid,
            .video-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .layout {
                display: block;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .quick-links {
                grid-template-columns: 1fr;
            }

            .topbar {
                display: block;
            }

            .welcome-badge {
                display: inline-block;
                margin-top: 12px;
            }
        }
    </style>
</head>

<body>

    <div class="layout">

        <aside class="sidebar">

            <div class="logo">
                SOUND <span>GROUP</span>
            </div>

            <div class="profile-box">
                <div class="profile-icon">🎵</div>

                <h3>{{ auth()->user()->name }}</h3>

                <p>USER ACCOUNT</p>
            </div>

            <div class="menu-title">Main Menu</div>

            <div class="menu">

                <a href="{{ route('dashboard') }}" class="active">
                    🏠 Dashboard
                </a>

                <a href="{{ route('user.music') }}">
                    🎵 Music
                </a>

                <a href="{{ route('user.videos') }}">
                    🎬 Videos
                </a>

                <a href="{{ route('user.music') }}">
                    🔎 Search Music
                </a>

                <a href="{{ route('user.reviews') }}">
                    ⭐ My Reviews & Ratings
                </a>

                <a href="{{ route('profile.edit') }}">
                    👤 My Profile
                </a>

            </div>

            <div class="menu-title">Account</div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout">
                    🚪 Logout
                </button>
            </form>

        </aside>

        <main class="main">

            <div class="topbar">

                <div>
                    <h1>Welcome Back, {{ auth()->user()->name }} 👋</h1>

                    <p>
                        Explore the latest music and videos from SOUND Group.
                    </p>
                </div>

                <div class="welcome-badge">
                    🎧 SOUND Group Music Platform
                </div>

            </div>

            <div class="stats">

                <div class="stat-card">
                    <div class="stat-icon">🎵</div>

                    <h2>{{ $musicCount }}</h2>

                    <p>Available Music</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">🎬</div>

                    <h2>{{ $videoCount }}</h2>

                    <p>Available Videos</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">💬</div>

                    <h2>{{ $myReviews }}</h2>

                    <p>My Reviews</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">⭐</div>

                    <h2>{{ $myRatings }}</h2>

                    <p>My Ratings</p>
                </div>

            </div>

            <div class="about-section">
                <div class="about-header">
                    <div>
                        <span class="about-small-title">WELCOME TO</span>
                        <h2>🎧 SOUND <span>Group</span></h2>
                    </div>

                    <div class="about-icon">
                        🎵
                    </div>
                </div>

                <div class="about-content">

                    <h3>Your Entertainment, Your Sound</h3>

                    <p>
                        SOUND Group is an entertainment platform where you can discover,
                        listen to and enjoy Regional and English music and videos.
                    </p>

                    <p>
                        Explore your favorite music and videos by
                        <strong>Artist, Album, Year, Genre and Language.</strong>
                        Users can also share their reviews and ratings for their
                        favorite content.
                    </p>

                    <div class="about-features">

                        <div class="about-feature">
                            <span>🎵</span>
                            <div>
                                <strong>Music</strong>
                                <small>Regional & English Songs</small>
                            </div>
                        </div>

                        <div class="about-feature">
                            <span>🎬</span>
                            <div>
                                <strong>Videos</strong>
                                <small>Latest Music Videos</small>
                            </div>
                        </div>

                        <div class="about-feature">
                            <span>🔎</span>
                            <div>
                                <strong>Explore</strong>
                                <small>Artist, Album, Year & Genre</small>
                            </div>
                        </div>

                        <div class="about-feature">
                            <span>⭐</span>
                            <div>
                                <strong>Reviews & Ratings</strong>
                                <small>Share Your Experience</small>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- ================= END ABOUT SOUND GROUP ================= -->
            <style>
                .about-section {
                    background: linear-gradient(135deg, #151525, #0d0d15);
                    border: 1px solid rgba(155, 92, 255, 0.25);
                    border-radius: 20px;
                    padding: 28px;
                    margin-bottom: 35px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
                    position: relative;
                    overflow: hidden;
                }

                .about-section::before {
                    content: "";
                    position: absolute;
                    width: 180px;
                    height: 180px;
                    border-radius: 50%;
                    background: rgba(155, 92, 255, 0.08);
                    top: -90px;
                    right: -50px;
                }

                .about-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 22px;
                    position: relative;
                    z-index: 1;
                }

                .about-small-title {
                    color: #9b5cff;
                    font-size: 11px;
                    font-weight: 700;
                    letter-spacing: 2px;
                }

                .about-header h2 {
                    color: #ffffff;
                    font-size: 25px;
                    margin: 5px 0 0;
                }

                .about-header h2 span {
                    color: #9b5cff;
                }

                .about-icon {
                    width: 65px;
                    height: 65px;
                    border-radius: 18px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 30px;
                    background: linear-gradient(135deg, #713cff, #9b5cff);
                    box-shadow: 0 8px 25px rgba(113, 60, 255, 0.35);
                }

                .about-content {
                    position: relative;
                    z-index: 1;
                }

                .about-content h3 {
                    color: #ffffff;
                    font-size: 20px;
                    margin: 0 0 12px;
                }

                .about-content p {
                    color: #a9a9b8;
                    font-size: 14px;
                    line-height: 1.7;
                    margin: 0 0 10px;
                    max-width: 900px;
                }

                .about-content strong {
                    color: #c8a9ff;
                }

                .about-features {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 12px;
                    margin-top: 22px;
                }

                .about-feature {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    padding: 14px;
                    background: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(155, 92, 255, 0.15);
                    border-radius: 14px;
                    transition: 0.3s;
                }

                .about-feature:hover {
                    transform: translateY(-3px);
                    border-color: rgba(155, 92, 255, 0.45);
                    background: rgba(155, 92, 255, 0.08);
                }

                .about-feature>span {
                    font-size: 25px;
                }

                .about-feature strong {
                    display: block;
                    color: #ffffff;
                    font-size: 13px;
                    margin-bottom: 3px;
                }

                .about-feature small {
                    display: block;
                    color: #858595;
                    font-size: 11px;
                }

                @media (max-width: 900px) {
                    .about-features {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 550px) {
                    .about-header {
                        align-items: flex-start;
                    }

                    .about-icon {
                        width: 52px;
                        height: 52px;
                        font-size: 24px;
                    }

                    .about-features {
                        grid-template-columns: 1fr;
                    }
                }
            </style>

            <section class="section">

                <div class="section-header">

                    <h2>🎵 Latest 5 Music</h2>

                    <a href="{{ route('user.music') }}" class="view-all">
                        View All →
                    </a>

                </div>

                @if($latestMusic->count())

                    <div class="music-grid">

                        @foreach($latestMusic as $song)

                            <div class="media-card">

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
                                    <img src="{{ asset('storage/' . $song->image) }}" alt="{{ $song->name }}" class="media-image">
                                @else
                                    <div class="media-image"></div>
                                @endif

                                <div class="media-content">

                                    <h3>{{ $song->name }}</h3>

                                    <div class="artist">
                                        {{ $song->artist->name ?? 'Unknown Artist' }}
                                    </div>

                                    @if($song->description)
                                        <p class="description">
                                            {{ $song->description }}
                                        </p>
                                    @endif

                                    <div class="badges">

                                        @if($song->album)
                                            <span class="badge">
                                                Album: {{ $song->album->name }}
                                            </span>
                                        @endif

                                        @if($song->year)
                                            <span class="badge">
                                                Year: {{ $song->year }}
                                            </span>
                                        @endif

                                        @if($song->genre)
                                            <span class="badge">
                                                Genre: {{ $song->genre }}
                                            </span>
                                        @endif

                                        @if($song->language)
                                            <span class="badge">
                                                Language: {{ $song->language }}
                                            </span>
                                        @endif

                                    </div>

                                    @if($song->mp3)
                                        <audio controls>
                                            <source src="{{ asset('storage/' . $song->mp3) }}" type="audio/mpeg">
                                        </audio>
                                    @endif

                                </div>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="empty">
                        No music available yet.
                    </div>

                @endif

            </section>

            <section class="section">

                <div class="section-header">

                    <h2>🎬 Latest 5 Videos</h2>

                    <a href="{{ route('user.videos') }}" class="view-all">
                        View All →
                    </a>

                </div>

                @if($latestVideos->count())

                    <div class="video-grid">

                        @foreach($latestVideos as $video)

                            <div class="media-card">

                                @if(
                                        $video->is_new &&
                                        $video->created_at &&
                                        $video->created_at->gt(now()->subDays(7))
                                    )
                                    <span class="new-badge">
                                        🆕 NEW
                                    </span>
                                @endif

                                <div class="video-cover">
                                    <div class="video-play-icon">▶</div>
                                </div>

                                <div class="media-content">

                                    <h3>{{ $video->name }}</h3>

                                    <div class="artist">
                                        🎤 {{ $video->artist->name ?? 'Unknown Artist' }}
                                    </div>

                                    @if($video->description)
                                        <p class="description">
                                            {{ $video->description }}
                                        </p>
                                    @endif

                                    <div class="badges">

                                        @if($video->album)
                                            <span class="badge">
                                                💿 {{ $video->album->name }}
                                            </span>
                                        @endif

                                        @if($video->year)
                                            <span class="badge">
                                                📅 {{ $video->year }}
                                            </span>
                                        @endif

                                        @if($video->genre)
                                            <span class="badge">
                                                🎼 {{ $video->genre }}
                                            </span>
                                        @endif

                                        @if($video->language)
                                            <span class="badge">
                                                🌐 {{ $video->language }}
                                            </span>
                                        @endif

                                    </div>

                                    @if($video->video)
                                        <video controls>
                                            <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                                            Your browser does not support video.
                                        </video>
                                    @else
                                        <div class="empty">
                                            Video not available.
                                        </div>
                                    @endif

                                </div>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="empty">
                        No videos available yet.
                    </div>

                @endif

            </section>

            <section class="section">

                <div class="section-header">
                    <h2>⚡ Quick Access</h2>
                </div>

                <div class="quick-links">

                    <a href="{{ route('user.music') }}" class="quick-link">
                        <div class="quick-link-icon">🎵</div>
                        <h3>Browse Music</h3>
                        <p>Explore available songs</p>
                    </a>

                    <a href="{{ route('user.videos')}}" class="quick-link">
                        <div class="quick-link-icon">🎬</div>
                        <h3>Browse Videos</h3>
                        <p>Watch available videos</p>
                    </a>

                    <a href="{{ route('user.music') }}" class="quick-link">
                        <div class="quick-link-icon">🔎</div>
                        <h3>Search Music</h3>
                        <p>Find songs and artists</p>
                    </a>

                    <a href="{{ route('user.reviews') }}" class="quick-link">
                        <div class="quick-link-icon">⭐</div>
                        <h3>My Reviews</h3>
                        <p>Manage your reviews and ratings</p>
                    </a>

                </div>

            </section>

        </main>

    </div>

</body>

</html>