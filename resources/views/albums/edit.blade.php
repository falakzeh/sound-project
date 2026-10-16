<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Album</title>

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

        .top {
            margin-bottom: 25px;
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

        .form-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #c9c9d8;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #343447;
            border-radius: 8px;
            background: #10101a;
            color: white;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #9b5cff;
        }

        .form-group select option {
            background: #151525;
            color: white;
        }

        .error {
            background: #35171d;
            border: 1px solid #71313c;
            color: #ff9eab;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .update-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }

        .cancel-btn {
            padding: 12px 24px;
            border: 1px solid #343447;
            border-radius: 8px;
            background: #171720;
            color: #bbb;
            text-decoration: none;
        }

        .cancel-btn:hover {
            background: #252533;
            color: white;
        }

        @media (max-width: 750px) {
            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                padding: 20px;
            }

            .form-card {
                padding: 20px;
            }

            .buttons {
                flex-direction: column;
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

    <div class="menu-title">Main Menu</div>

    <div class="menu">
        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('music.index') }}">🎵 Music</a>
        <a href="{{ route('videos.index') }}">🎬 Videos</a>
        <a href="{{ route('artists.index') }}">🎤 Artists</a>
        <a href="{{ route('albums.index') }}" class="active">💿 Albums</a>
        <a href="{{ route('admin.users') }}">👥 Users</a>
        <a href="{{ route('admin.settings') }}">⚙️ Website Settings</a>
    </div>

    <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">🚪 Logout</button>
        </form>
    </div>

</aside>

<main class="main">

    <div class="top">
        <h1>💿 Edit <span>Album</span></h1>
        <p>Update album information on SOUND Group.</p>
    </div>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="form-card">

        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Album Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $album->name) }}"
                    placeholder="Enter album name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="artist_id">Artist</label>

                <select id="artist_id" name="artist_id" required>
                    <option value="">Select Artist</option>

                    @foreach($artists as $artist)
                        <option
                            value="{{ $artist->id }}"
                            {{ old('artist_id', $album->artist_id) == $artist->id ? 'selected' : '' }}
                        >
                            {{ $artist->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="year">Year</label>

                <input
                    type="number"
                    id="year"
                    name="year"
                    value="{{ old('year', $album->year) }}"
                    placeholder="Enter year"
                    min="1900"
                    max="2100"
                >
            </div>

            <div class="buttons">

                <button type="submit" class="update-btn">
                    💾 Update Album
                </button>

                <a href="{{ route('albums.index') }}" class="cancel-btn">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</main>

</body>
</html>