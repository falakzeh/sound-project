<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOUND Group | Videos</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0b12;
            color: #fff;
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

        /* SIDEBAR */
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

        /* MAIN */
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
            font-size: 30px;
            margin-bottom: 7px;
        }

        .topbar p {
            color: #88889a;
            font-size: 13px;
        }

        .badge-platform {
            background: #18182a;
            border: 1px solid #29293d;
            padding: 10px 15px;
            border-radius: 30px;
            color: #cfcfe0;
            font-size: 12px;
        }

        /* HEADER */
        .page-header {
            background: linear-gradient(135deg,
                    rgba(113, 60, 255, .16),
                    rgba(236, 72, 153, .08));

            border: 1px solid #29293d;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .page-header h2 {
            font-size: 21px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #9292a3;
            font-size: 13px;
        }

        /* VIDEO GRID */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .video-card {
            background: linear-gradient(145deg, #171727, #11111b);
            border: 1px solid #29293d;
            border-radius: 17px;
            overflow: hidden;
            position: relative;
            transition: .3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            border-color: #7146c9;
            box-shadow: 0 15px 35px rgba(113, 60, 255, .18);
        }

        /* VIDEO */
        .video-wrapper {
            width: 100%;
            height: 220px;
            background: #050509;
            position: relative;
            overflow: hidden;
        }

        .video-wrapper video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            background: #000;
        }

        .video-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;

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
        }

        .play-icon {
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
        }

        /* NEW BADGE */
        .new-badge {
            position: absolute;
            top: 12px;
            right: 12px;

            background: linear-gradient(90deg,
                    #ff3d81,
                    #9b5cff);

            color: white;
            padding: 6px 11px;
            border-radius: 20px;

            font-size: 11px;
            font-weight: bold;

            z-index: 10;

            box-shadow:
                0 4px 15px rgba(155, 92, 255, .35);
        }

        /* CONTENT */
        .video-content {
            padding: 18px;
        }

        .video-content h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .artist {
            color: #a875ff;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .description {
            color: #9292a3;
            font-size: 12px;
            line-height: 1.6;
            margin-bottom: 13px;
        }

        .badges {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .badge {
            background: #202034;
            border: 1px solid #303047;
            color: #bdbdd0;

            padding: 5px 8px;
            border-radius: 7px;

            font-size: 10px;
        }

        /* EMPTY */
        .empty {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 17px;

            padding: 50px 25px;
            text-align: center;

            color: #77778b;
            font-size: 14px;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 12px;
        }

        /* RESPONSIVE */
        @media (max-width: 1100px) {
            .video-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
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

            .video-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .layout {
                display: block;
            }

            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            .topbar {
                display: block;
            }

            .badge-platform {
                display: inline-block;
                margin-top: 12px;
            }

            .video-wrapper {
                height: 210px;
            }
        }
    </style>
</head>

<body>

    <div class="layout">

        {{-- SIDEBAR --}}
        <aside class="sidebar">

            <div class="logo">
                SOUND <span>GROUP</span>
            </div>

            <div class="profile-box">

                <div class="profile-icon">
                    🎵
                </div>

                <h3>
                    {{ auth()->user()->name }}
                </h3>

                <p>
                    USER ACCOUNT
                </p>

            </div>

            <div class="menu-title">
                Main Menu
            </div>

            <div class="menu">

                <a href="{{ route('dashboard') }}">
                    🏠 Dashboard
                </a>

                <a href="{{ route('user.music') }}">
                    🎵 Music
                </a>

                <a href="{{ route('user.videos') }}" class="active">
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

            <div class="menu-title">
                Account
            </div>

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit" class="logout">
                    🚪 Logout
                </button>

            </form>

        </aside>


        {{-- MAIN --}}
        <main class="main">

            <div class="topbar">

                <div>

                    <h1>
                        🎬 Videos
                    </h1>

                    <p>
                        Explore and watch videos from SOUND Group.
                    </p>

                </div>

                <div class="badge-platform">
                    🎧 SOUND Group Music Platform
                </div>

            </div>


            {{-- PAGE HEADER --}}
            <div class="page-header">

                <h2>
                    Latest Videos
                </h2>

                <p>
                    Watch the latest music videos uploaded to SOUND Group.
                </p>

            </div>


            {{-- VIDEOS --}}
            @if($videos->count())

                <div class="video-grid">

                    @foreach($videos as $video)

                        <div class="video-card">

                            {{-- NEW BADGE --}}
                            @if(
                                    $video->is_new &&
                                    $video->created_at &&
                                    $video->created_at->gt(now()->subDays(7))
                                )

                                <span class="new-badge">
                                    🆕 NEW
                                </span>

                            @endif


                            {{-- VIDEO --}}
                            <div class="video-wrapper">

                                @if($video->video)

                                    <video controls preload="metadata">

                                        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">

                                        Your browser does not support the video player.

                                    </video>

                                @else

                                    <div class="video-placeholder">

                                        <div class="play-icon">
                                            ▶
                                        </div>

                                    </div>

                                @endif

                            </div>


                            {{-- VIDEO INFORMATION --}}
                            <div class="video-content">

                                <h3>
                                    {{ $video->title ?? $video->name ?? 'Untitled Video' }}
                                </h3>


                                <div class="artist">

                                    🎤
                                    {{ $video->artist->name ?? 'Unknown Artist' }}

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

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="empty">

                    <div class="empty-icon">
                        🎬
                    </div>

                    <h3>
                        No Videos Available
                    </h3>

                    <p style="margin-top: 8px;">
                        There are no videos available right now.
                    </p>

                </div>

            @endif

        </main>

    </div>

</body>

</html>