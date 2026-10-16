<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Video - SOUND Group</title>

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
            transition: .3s;
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

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
        }

        .top-header h1 {
            font-size: 30px;
        }

        .top-header p {
            color: #9999aa;
            margin-top: 7px;
        }

        .back-btn {
            text-decoration: none;
            color: white;
            background: #171720;
            border: 1px solid #343447;
            padding: 11px 18px;
            border-radius: 9px;
            transition: .3s;
        }

        .back-btn:hover {
            background: #252533;
            border-color: #713cff;
        }

        .form-card {
            width: 100%;
            background: linear-gradient(145deg, #151525, #10101a);
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .25);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            color: #d8d8e5;
            font-size: 14px;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px 14px;
            background: #0d0d15;
            border: 1px solid #343447;
            border-radius: 9px;
            color: white;
            outline: none;
            font-size: 14px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, .12);
        }

        select option {
            background: #151525;
            color: white;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 10px;
        }

        .file-note {
            color: #77778a;
            font-size: 12px;
            margin-top: 7px;
        }

        .error-box {
            background: rgba(239, 68, 68, .12);
            border: 1px solid rgba(239, 68, 68, .35);
            color: #ff8d8d;
            padding: 14px;
            border-radius: 9px;
            margin-bottom: 22px;
        }

        .error-box ul {
            padding-left: 20px;
        }

        .success-box {
            background: rgba(34, 197, 94, .12);
            border: 1px solid rgba(34, 197, 94, .35);
            color: #7ee2a8;
            padding: 14px;
            border-radius: 9px;
            margin-bottom: 22px;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 28px;
        }

        .new-video-box {
    display: flex;
    align-items: center;
    gap: 14px;
    background: rgba(155, 92, 255, 0.08);
    border: 1px solid #343447;
    border-radius: 12px;
    padding: 16px 18px;
}

.new-video-box input[type="checkbox"] {
    width: 20px;
    height: 20px;
    accent-color: #9b5cff;
    cursor: pointer;
}

.new-video-box label {
    display: block;
    color: white;
    font-weight: bold;
    margin-bottom: 5px;
    cursor: pointer;
}

.new-video-box small {
    color: #9999aa;
    font-size: 12px;
}

        .add-btn {
            border: none;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            padding: 12px 25px;
            border-radius: 9px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .25);
        }

        .add-btn:hover {
            opacity: .9;
        }

        .reset-btn,
        .cancel-btn {
            text-decoration: none;
            background: #171720;
            color: #bbb;
            border: 1px solid #343447;
            padding: 12px 22px;
            border-radius: 9px;
            cursor: pointer;
            transition: .3s;
        }

        .reset-btn:hover,
        .cancel-btn:hover {
            background: #252533;
            color: white;
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .top-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-card {
                padding: 20px;
            }

            .form-actions {
                flex-wrap: wrap;
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

        <div class="profile-icon">♛</div>

        <h3>{{ auth()->user()->name ?? 'Admin' }}</h3>

        <p>Administrator</p>

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

    <div class="top-header">

        <div>

            <h1>🎬 Add New Video</h1>

            <p>Add a new video to SOUND Group.</p>

        </div>

        <a href="{{ route('videos.index') }}" class="back-btn">
            ← Back to Videos
        </a>

    </div>


    @if(session('success'))

        <div class="success-box">
            {{ session('success') }}
        </div>

    @endif


    @if($errors->any())

        <div class="error-box">

            <strong>Please fix the following errors:</strong>

            <ul>

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <div class="form-card">

        <form action="{{ route('videos.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-grid">


                <div class="form-group full">

                    <label for="title">
                        Video Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter video title"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="artist_id">
                        Artist
                    </label>

                    <select
                        name="artist_id"
                        id="artist_id"
                        required
                    >

                        <option value="">
                            Select Artist
                        </option>

                        @foreach($artists as $artist)

                            <option
                                value="{{ $artist->id }}"
                                {{ old('artist_id') == $artist->id ? 'selected' : '' }}
                            >
                                {{ $artist->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="form-group">

                    <label for="album_id">
                        Album
                    </label>

                    <select
                        name="album_id"
                        id="album_id"
                    >

                        <option value="">
                            Select Album
                        </option>

                        @foreach($albums as $album)

                            <option
                                value="{{ $album->id }}"
                                {{ old('album_id') == $album->id ? 'selected' : '' }}
                            >
                                Album #{{ $album->id }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="form-group">

                    <label for="year">
                        Year
                    </label>

                    <input
                        type="text"
                        id="year"
                        name="year"
                        value="{{ old('year') }}"
                        placeholder="e.g. 2026"
                    >

                </div>


                <div class="form-group">

                    <label for="genre">
                        Genre
                    </label>

                    <input
                        type="text"
                        id="genre"
                        name="genre"
                        value="{{ old('genre') }}"
                        placeholder="e.g. Pop, Punjabi, Bollywood"
                    >

                </div>


                <div class="form-group">

                    <label for="language">
                        Language
                    </label>

                    <input
                        type="text"
                        id="language"
                        name="language"
                        value="{{ old('language') }}"
                        placeholder="e.g. Urdu, English, Punjabi"
                    >

                </div>


                <div class="form-group full">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        name="description"
                        id="description"
                        placeholder="Enter video description"
                    >{{ old('description') }}</textarea>

                </div>

                <div class="form-group full">

    <div class="new-video-box">

        <input
            type="checkbox"
            name="is_new"
            id="is_new"
            value="1"
            {{ old('is_new') ? 'checked' : '' }}
        >

        <div>
            <label for="is_new">
                🆕 Mark as New Video
            </label>

            <small>
                Enable this to show a flashing NEW badge on the website.
            </small>
        </div>

    </div>

</div>


                <div class="form-group">

                    <label for="video">
                        Upload Video
                    </label>

                    <input
                        type="file"
                        id="video"
                        name="video"
                        accept="video/mp4,video/webm,video/ogg"
                    >

                    <div class="file-note">
                        Allowed: MP4, WebM, OGG
                    </div>

                </div>


                <div class="form-group">

                    <label for="image">
                        Upload Image
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept="image/jpeg,image/png,image/jpg,image/webp"
                    >

                    <div class="file-note">
                        Allowed: JPG, JPEG, PNG, WEBP
                    </div>

                </div>


            </div>


            <div class="form-actions">

                <button type="submit" class="add-btn">
                    🎬 Add Video
                </button>

                <button type="reset" class="reset-btn">
                    ↻ Reset
                </button>

                <a href="{{ route('videos.index') }}" class="cancel-btn">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</main>

</body>
</html>