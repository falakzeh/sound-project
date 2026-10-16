<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Music - SOUND Group</title>

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

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 30px;
        }

        .page-header h1 span {
            color: #9b5cff;
        }

        .page-header p {
            color: #9999aa;
            margin-top: 6px;
        }

        .back-btn {
            text-decoration: none;
            color: #bbb;
            background: #171720;
            border: 1px solid #343447;
            padding: 10px 16px;
            border-radius: 9px;
            transition: .3s;
        }

        .back-btn:hover {
            color: white;
            border-color: #713cff;
            background: #202033;
        }

        .form-card {
            max-width: 950px;
            margin: auto;
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .25);
        }

        .form-card-header {
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 1px solid #29293d;
        }

        .form-card-header h2 {
            font-size: 21px;
        }

        .form-card-header p {
            color: #88889b;
            font-size: 13px;
            margin-top: 6px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            color: #c9c9d8;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px 13px;
            background: #0f0f19;
            color: white;
            border: 1px solid #343447;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, .10);
        }

        select.form-control option {
            background: #151525;
            color: white;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        input[type="file"].form-control {
            padding: 9px;
        }

        .file-note {
            color: #77778a;
            font-size: 11px;
            margin-top: 6px;
        }

        .new-music-box {
            background: #0f0f19;
            border: 1px solid #343447;
            border-radius: 8px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .new-music-box input {
            width: 18px;
            height: 18px;
            accent-color: #9b5cff;
            cursor: pointer;
        }

        .new-music-box label {
            margin: 0;
            color: #c9c9d8;
            font-size: 14px;
            cursor: pointer;
        }

        .new-music-box small {
            display: block;
            color: #77778a;
            font-size: 11px;
            margin-top: 5px;
        }

        .alert-success {
            background: #14291d;
            border: 1px solid #285c39;
            color: #7ee2a8;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background: #3a1820;
            border: 1px solid #63303a;
            color: #ff9eab;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            padding-left: 20px;
            margin: 0;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #29293d;
        }

        .btn {
            padding: 11px 20px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-primary {
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .20);
        }

        .btn-primary:hover {
            opacity: .9;
        }

        .btn-secondary {
            background: #25253a;
            color: #c9c9d8;
            border: 1px solid #343447;
        }

        .btn-secondary:hover {
            background: #303047;
            color: white;
        }

        @media (max-width: 900px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 650px) {

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .form-card {
                padding: 20px;
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

        <a href="{{ route('music.index') }}" class="active">
            🎵 Music
        </a>

        <a href="{{ route('videos.index') }}">
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

    <div class="page-header">

        <div>

            <h1>
                Add <span>New Music</span>
            </h1>

            <p>
                Add a new song to your SOUND Group music library.
            </p>

        </div>

        <a href="{{ route('music.index') }}" class="back-btn">
            ← Back to Music
        </a>

    </div>


    @if(session('success'))

        <div class="alert-success">
            {{ session('success') }}
        </div>

    @endif


    @if($errors->any())

        <div class="alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="form-card">

        <div class="form-card-header">

            <h2>
                🎵 Music Information
            </h2>

            <p>
                Enter the song details and upload its image and audio file.
            </p>

        </div>


        <form
            action="{{ route('music.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="form-grid">


                <div class="form-group full">

                    <label>
                        Song Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter song name"
                        value="{{ old('name') }}"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Artist
                    </label>

                    <select
                        name="artist_id"
                        class="form-control"
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

                    <label>
                        Album
                    </label>

                    <select
                        name="album_id"
                        class="form-control"
                        required
                    >

                        <option value="">
                            Select Album
                        </option>

                        @foreach($albums as $album)

                            <option
                                value="{{ $album->id }}"
                                {{ old('album_id') == $album->id ? 'selected' : '' }}
                            >
                                {{ $album->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Year
                    </label>

                    <input
                        type="number"
                        name="year"
                        class="form-control"
                        placeholder="e.g. 2024"
                        value="{{ old('year') }}"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Genre
                    </label>

                    <select
                        name="genre"
                        class="form-control"
                    >

                        <option value="">
                            Select Genre
                        </option>

                        <option
                            value="Pop"
                            {{ old('genre') == 'Pop' ? 'selected' : '' }}
                        >
                            Pop
                        </option>

                        <option
                            value="Rock"
                            {{ old('genre') == 'Rock' ? 'selected' : '' }}
                        >
                            Rock
                        </option>

                        <option
                            value="Romantic"
                            {{ old('genre') == 'Romantic' ? 'selected' : '' }}
                        >
                            Romantic
                        </option>

                        <option
                            value="Hip Hop"
                            {{ old('genre') == 'Hip Hop' ? 'selected' : '' }}
                        >
                            Hip Hop
                        </option>

                        <option
                            value="Classical"
                            {{ old('genre') == 'Classical' ? 'selected' : '' }}
                        >
                            Classical
                        </option>

                        <option
                            value="Folk"
                            {{ old('genre') == 'Folk' ? 'selected' : '' }}
                        >
                            Folk
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Language
                    </label>

                    <select
                        name="language"
                        class="form-control"
                    >

                        <option value="">
                            Select Language
                        </option>

                        <option
                            value="Urdu"
                            {{ old('language') == 'Urdu' ? 'selected' : '' }}
                        >
                            Urdu
                        </option>

                        <option
                            value="Hindi"
                            {{ old('language') == 'Hindi' ? 'selected' : '' }}
                        >
                            Hindi
                        </option>

                        <option
                            value="Punjabi"
                            {{ old('language') == 'Punjabi' ? 'selected' : '' }}
                        >
                            Punjabi
                        </option>

                        <option
                            value="English"
                            {{ old('language') == 'English' ? 'selected' : '' }}
                        >
                            English
                        </option>

                        <option
                            value="Sindhi"
                            {{ old('language') == 'Sindhi' ? 'selected' : '' }}
                        >
                            Sindhi
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Image
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        accept="image/*"
                    >

                    <span class="file-note">
                        JPG, JPEG, PNG or WEBP
                    </span>

                </div>


                <div class="form-group">

                    <label>
                        Audio File (MP3)
                    </label>

                    <input
                        type="file"
                        name="audio"
                        class="form-control"
                        accept="audio/*"
                        required
                    >

                    <span class="file-note">
                        MP3, WAV or OGG
                    </span>

                </div>


                <div class="form-group full">

                    <label>
                        Description
                    </label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="4"
                        placeholder="Enter song description"
                    >{{ old('description') }}</textarea>

                </div>


                <div class="form-group full">

                    <div class="new-music-box">

                        <input
                            type="checkbox"
                            name="is_new"
                            id="is_new"
                            value="1"
                            {{ old('is_new') ? 'checked' : '' }}
                        >

                        <div>

                            <label for="is_new">
                                🆕 Mark as New Music
                            </label>

                            <small>
                                Enable this to show a flashing NEW badge on the website.
                            </small>

                        </div>

                    </div>

                </div>


            </div>


            <div class="form-actions">

                <button
                    type="submit" class="btn btn-primary">🎵 Add Music
                </button>

                <a
                    href="{{ route('music.create') }}"
                    class="btn btn-secondary"
                >
                    Reset
                </a>

                <a
                    href="{{ route('music.index') }}"
                    class="btn btn-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</main>

</body>
</html>