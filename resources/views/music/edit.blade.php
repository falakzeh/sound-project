<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Music - SOUND Group</title>

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
            max-width: none;
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

        .current-file {
            margin-top: 8px;
            color: #9999aa;
            font-size: 12px;
        }

        .current-file span {
            color: #b58cff;
        }

        .new-music-box {
            background: #10101b;
            border: 1px solid #343447;
            border-radius: 10px;
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
            color: #e1e1ed;
            font-size: 14px;
            cursor: pointer;
        }

        .new-music-box small {
            color: #77778a;
            font-size: 11px;
            display: block;
            margin-top: 4px;
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

        .update-btn {
            border: none;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            padding: 12px 25px;
            border-radius: 9px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .25);
        }

        .update-btn:hover {
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
            transition: .3s;
        }

        .reset-btn:hover,
        .cancel-btn:hover {
            background: #252533;
            color: white;
        }

        .image-preview {
            margin-top: 10px;
        }

        .image-preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #343447;
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
                gap: 15px;
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
            SOUND <span>Group</span>
        </div>

        <div class="admin-profile">

            <div class="profile-icon">
                👑
            </div>

            <h3>
                {{ auth()->user()->name ?? 'Administrator' }}
            </h3>

            <p>
                Administrator
            </p>

        </div>

        <div class="menu">

            <div class="menu-title">
                Main Menu
            </div>

            <a href="{{ route('dashboard') }}">
                🏠
                <span>Dashboard</span>
            </a>

            <a href="{{ route('music.index') }}" class="active">
                🎵
                <span>Music</span>
            </a>

            <a href="{{ route('videos.index') }}">
                🎬
                <span>Videos</span>
            </a>

            <a href="{{ route('artists.index') }}">
                🎤
                <span>Artists</span>
            </a>

            <a href="{{ route('albums.index') }}">
                💿
                <span>Albums</span>
            </a>

            <a href="{{ route('admin.users') }}">
                👥
                <span>Users</span>
            </a>

            <a href="{{ route('admin.settings') }}">
                ⚙️
                <span>Website Settings</span>
            </a>

            <div class="logout">

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button type="submit">
                        🚪 Logout
                    </button>

                </form>

            </div>

        </div>

    </aside>


    <main class="main">

        <div class="top-header">

            <div>

                <h1>
                    ✏️ Edit Music
                </h1>

                <p>
                    Update the information of
                    <strong>{{ $music->name }}</strong>
                </p>

            </div>

            <a href="{{ route('music.index') }}" class="back-btn">
                ← Back to Music
            </a>

        </div>


        @if(session('success'))

            <div class="success-box">
                {{ session('success') }}
            </div>

        @endif


        @if($errors->any())

            <div class="error-box">

                <strong>
                    Please fix the following errors:
                </strong>

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

            <form
                action="{{ route('music.update', $music->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <div class="form-grid">


                    <div class="form-group full">

                        <label for="name">
                            Song Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $music->name) }}"
                            placeholder="Enter song name"
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
                                    {{ old('artist_id', $music->artist_id) == $artist->id ? 'selected' : '' }}
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
                            required
                        >

                            <option value="">
                                Select Album
                            </option>

                            @foreach($albums as $album)

                                <option
                                    value="{{ $album->id }}"
                                    {{ old('album_id', $music->album_id) == $album->id ? 'selected' : '' }}
                                >
                                    {{ $album->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="year">
                            Year
                        </label>

                        <input
                            type="number"
                            id="year"
                            name="year"
                            value="{{ old('year', $music->year) }}"
                            placeholder="Enter year"
                        >

                    </div>


                    <div class="form-group">

                        <label for="genre">
                            Genre
                        </label>

                        <select
                            name="genre"
                            id="genre"
                        >

                            <option value="">
                                Select Genre
                            </option>

                            <option
                                value="Pop"
                                {{ old('genre', $music->genre) == 'Pop' ? 'selected' : '' }}
                            >
                                Pop
                            </option>

                            <option
                                value="Rock"
                                {{ old('genre', $music->genre) == 'Rock' ? 'selected' : '' }}
                            >
                                Rock
                            </option>

                            <option
                                value="Romantic"
                                {{ old('genre', $music->genre) == 'Romantic' ? 'selected' : '' }}
                            >
                                Romantic
                            </option>

                            <option
                                value="Hip Hop"
                                {{ old('genre', $music->genre) == 'Hip Hop' ? 'selected' : '' }}
                            >
                                Hip Hop
                            </option>

                            <option
                                value="Classical"
                                {{ old('genre', $music->genre) == 'Classical' ? 'selected' : '' }}
                            >
                                Classical
                            </option>

                            <option
                                value="Folk"
                                {{ old('genre', $music->genre) == 'Folk' ? 'selected' : '' }}
                                >
                                Folk
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="language">
                            Language
                        </label>

                        <select
                            name="language"
                            id="language"
                        >

                            <option value="">
                                Select Language
                            </option>

                            <option
                                value="Urdu"
                                {{ old('language', $music->language) == 'Urdu' ? 'selected' : '' }}
                            >
                                Urdu
                            </option>

                            <option
                                value="Hindi"
                                {{ old('language', $music->language) == 'Hindi' ? 'selected' : '' }}
                            >
                                Hindi
                            </option>

                            <option
                                value="Punjabi"
                                {{ old('language', $music->language) == 'Punjabi' ? 'selected' : '' }}
                            >
                                Punjabi
                            </option>

                            <option
                                value="English"
                                {{ old('language', $music->language) == 'English' ? 'selected' : '' }}
                            >
                                English
                            </option>

                            <option
                                value="Sindhi"
                                {{ old('language', $music->language) == 'Sindhi' ? 'selected' : '' }}
                            >
                                Sindhi
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="image">
                            Change Image
                        </label>

                        <input
                            type="file"
                            id="image"
                            name="image"
                            accept="image/*"
                        >

                        @if($music->image)

                            <div class="image-preview">

                                <imgsrc="{{ asset('storage/' . $music->image) }}"
                                    alt="{{ $music->name }}"
                                >

                            </div>

                            <div class="current-file">
                                Current image is shown above.
                            </div>

                        @else

                            <div class="current-file">
                                No image uploaded.
                            </div>

                        @endif

                    </div>


                    <div class="form-group">

                        <label for="audio">
                            Change Audio
                        </label>

                        <input
                            type="file"
                            id="audio"
                            name="audio"
                            accept="audio/*"
                        >

                        @if($music->audio)

                            <div class="current-file">

                                Current audio:
                                <span>
                                    {{ basename($music->audio) }}
                                </span>

                            </div>

                        @else

                            <div class="current-file">
                                No audio uploaded.
                            </div>

                        @endif

                    </div>


                    <div class="form-group full">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            placeholder="Enter song description"
                        >{{ old('description', $music->description) }}</textarea>

                    </div>


                    <div class="form-group full">

                        <div class="new-music-box">

                            <input
                                type="checkbox"
                                name="is_new"
                                id="is_new"
                                value="1"
                                {{ old('is_new', $music->is_new) ? 'checked' : '' }}
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
                        type="submit"
                        class="update-btn"
                    >
                        💾 Update Music
                    </button>

                    <a
                        href="{{ route('music.edit', $music->id) }}"
                        class="reset-btn"
                    >
                        Reset
                    </a>

                    <a
                        href="{{ route('music.index') }}"
                        class="cancel-btn"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </main>

</body>

</html>