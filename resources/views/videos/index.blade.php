<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Management</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b0b12;
            color: white;
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
            overflow-x: hidden;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #0d0d15;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #39304f;
            border-radius: 10px;
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 35px;
        }

        .logo span {
            color: #9b5cff;
        }

        .admin-profile {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid #29293d;
            margin-bottom: 25px;
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
            box-shadow: 0 0 25px rgba(139, 92, 246, .35);
        }

        .admin-profile h3 {
            font-size: 16px;
            margin-top: 12px;
        }

        .admin-profile p {
            color: #9999aa;
            font-size: 13px;
            margin-top: 5px;
        }

        .menu-title {
            color: #77778a;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
            padding-left: 12px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 7px;
            color: #bdbdcc;
            text-decoration: none;
            border-radius: 9px;
            transition: .3s;
        }

        .menu a:hover,
        .menu a.active {
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .25);
        }

        .logout {
            margin-top: 25px;
            padding-bottom: 10px;
        }

        .logout button {
            width: 100%;
            padding: 11px;
            border: 1px solid #343447;
            border-radius: 9px;
            background: #171720;
            color: #bbb;
            cursor: pointer;
        }

        .logout button:hover {
            background: #252533;
            color: white;
            border-color: #55556d;
        }

        .main {
            margin-left: 245px;
            padding: 30px;
            min-height: 100vh;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .top h1 {
            font-size: 30px;
        }

        .top h1 span {
            color: #9b5cff;
        }

        .top p {
            color: #9999aa;
            margin-top: 6px;
        }

        .add-btn {
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 9px;
            font-weight: bold;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .25);
        }

        .add-btn:hover {
            opacity: .9;
        }

        .success {
            background: #14291d;
            border: 1px solid #285c39;
            color: #7ee2a8;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .video-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            overflow: hidden;
            transition: .3s;
        }

        .video-card:hover {
            transform: translateY(-4px);
            border-color: #7146c9;
            box-shadow: 0 10px 30px rgba(113, 60, 255, .12);
        }

        /* TOP AREA WITHOUT PICTURE */

        .video-top {
            height: 70px;
            background: linear-gradient(135deg, #17172a, #10101a);
            border-bottom: 1px solid #29293d;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        /* NEW BADGE */

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
            z-index: 10;
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

        .card-body {
            padding: 18px;
        }

        .card-body h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .artist {
            color: #9b5cff;
            margin-bottom: 12px;
        }

        .description {
            color: #aaaabd;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-bottom: 15px;
        }

        .badge {
            background: #232337;
            color: #c9c9d8;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 12px;
        }

        video {
            width: 100%;
            max-height: 220px;
            border-radius: 8px;
            background: #08080d;
            margin-bottom: 15px;
            display: block;
        }

        .actions {
            display: flex;
            gap: 7px;
        }

        .actions a,
        .actions button {
            flex: 1;
            text-align: center;
            padding: 9px 5px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 13px;
        }

        .edit-btn {
            background: #3a275d;
            color: #d7b9ff;
        }

        .edit-btn:hover {
            background: #51377d;
        }

        .delete-btn {
            background: #4b2029;
            color: #ff9eab;
        }

        .delete-btn:hover {
            background: #652934;
        }

        .empty {
            background: #151525;
            border: 1px solid #29293d;
            padding: 50px;
            text-align: center;
            border-radius: 15px;
            color: #9999aa;
        }

        .empty h2 {
            color: white;
        }

        @media (max-width: 1100px) {
            .video-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 750px) {

            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                padding: 20px;
            }

            .top {
                flex-direction: column;
                align-items: flex-start;
            }

            .top h1 {
                font-size: 25px;
            }

            .video-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>

<body>
    <aside class="sidebar">

        <div class="logo">
            SOUND <span>GROUP</span>
        </div>

        <div class="admin-profile">

            <div class="profile-icon">
                ♛
            </div>

            <h3>
                {{ auth()->user()->name ?? 'Admin' }}
            </h3>

            <p>
                Administrator
            </p>

        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <div class="menu">

            <a href="{{ route('dashboard') }}">
                🏠 Dashboard
            </a>

            <a href="{{ route('music.index') }}">
                🎵 Music
            </a>

            <a href="{{ route('videos.index') }}" class="active">
                🎬 Videos
            </a>

            <a href="{{ route('artists.index') }}">
                🎤 Artists
            </a>

            <a href="{{ route('albums.index') }}">
                💿 Albums
            </a>

            <a href="{{ route('admin.users') }}">
                👥 Users
            </a>

            <a href="{{ route('admin.settings') }}">
                ⚙️ Website Settings
            </a>

        </div>

        <div class="logout">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">
                    🚪 Logout
                </button>

            </form>

        </div>

    </aside>

    <main class="main">

        <div class="top">

            <div>

                <h1>
                    🎬 Video <span>Management</span>
                </h1>

                <p>
                    Manage all videos available on SOUND Group.
                </p>

            </div>

            <a href="{{ route('videos.create') }}" class="add-btn">
                + Add Video
            </a>

        </div>

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif

        @if($videos->count() > 0)

            <div class="video-grid">

                @foreach($videos as $video)

                    <div class="video-card">

                        {{-- Top area without picture --}}

                        <div class="video-top">

                            🎬

                            {{-- NEW Badge --}}

                            @if($video->is_new)

                                <span class="new-badge">
                                    🆕 NEW
                                </span>

                            @endif

                        </div>

                        <div class="card-body">

                            <h2>
                                {{ $video->title }}
                            </h2>

                            <div class="artist">
                                🎤 {{ $video->artist->name ?? 'Unknown Artist' }}
                            </div>

                            @if($video->description)

                                <div class="description">
                                    {{ $video->description }}
                                </div>

                            @endif

                            <div class="details">

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

                                    <source src="{{ asset('storage/' . $video->video) }}">

                                    Your browser does not support the video element.

                                </video>

                            @endif

                            <div class="actions">

                                <a href="{{ route('videos.edit', $video->id) }}" class="edit-btn">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="flex:1;">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit" class="delete-btn" style="width:100%;"
                                        onclick="return confirm('Are you sure you want to delete this video?')">
                                        🗑️ Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">

                <h2>
                    No Videos Available
                </h2>

                <p style="margin-top:10px;">
                    Add your first video to the website.
                </p>

            </div>

        @endif

    </main>

</body>

</html>