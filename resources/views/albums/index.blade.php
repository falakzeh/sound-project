<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Management</title>

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

        .success {
            background: #14291d;
            border: 1px solid #285c39;
            color: #7ee2a8;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .error {
            background: #35171d;
            border: 1px solid #71313c;
            color: #ff9eab;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .add-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 22px;
            margin-bottom: 25px;
        }

        .add-card h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .add-form {
            display: grid;
            grid-template-columns: 1fr 1fr 160px auto;
            gap: 10px;
        }

        .add-form input,
        .add-form select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #343447;
            border-radius: 8px;
            background: #10101a;
            color: white;
            outline: none;
        }

        .add-form input:focus,
        .add-form select:focus {
            border-color: #9b5cff;
        }

        .add-form select option {
            background: #151525;
            color: white;
        }

        .add-form button {
            padding: 12px 22px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .add-form button:hover {
            opacity: .9;
        }

        .album-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .album-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 20px;
            transition: .3s;
        }

        .album-card:hover {
            transform: translateY(-4px);
            border-color: #7146c9;
            box-shadow: 0 10px 30px rgba(113, 60, 255, .12);
        }

        .album-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, #713cff, #ec4899);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .album-card h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .artist {
            color: #9b5cff;
            margin-bottom: 12px;
        }

        .year {
            display: inline-block;
            background: #232337;
            color: #c9c9d8;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 12px;
            margin-bottom: 15px;
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

        .delete-btn {
            background: #4b2029;
            color: #ff9eab;
        }

        .empty {
            background: #151525;
            border: 1px solid #29293d;
            padding: 50px;
            text-align: center;
            border-radius: 15px;
            color: #9999aa;
        }

        @media (max-width: 1000px) {
            .add-form {
                grid-template-columns: 1fr 1fr;
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

            .add-form {
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
        <div>
            <h1>💿 Album <span>Management</span></h1>
            <p>Add, edit and manage all albums on SOUND Group.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="add-card">

        <h2>➕ Add New Album</h2>

        <form action="{{ route('albums.store') }}" method="POST" class="add-form">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Enter album name"
                value="{{ old('name') }}"
                required
            >

            <select name="artist_id" required>
                <option value="">Select Artist</option>

                @foreach(\App\Models\Artist::all() as $artist)
                    <option value="{{ $artist->id }}"
                        {{ old('artist_id') == $artist->id ? 'selected' : '' }}>
                        {{ $artist->name }}
                    </option>
                @endforeach
            </select>

            <input
                type="number"
                name="year"
                placeholder="Year"
                value="{{ old('year') }}"
                min="1900"
                max="2100"
            >

            <button type="submit">
                Add Album
            </button>

        </form>

    </div>

    @if($albums->count() > 0)

        <div class="album-grid">

            @foreach($albums as $album)

                <div class="album-card">

                    <div class="album-icon">
                        💿
                    </div>

                    <h2>{{ $album->name }}</h2>

                    <div class="artist">
                        🎤 {{ $album->artist->name ?? 'Unknown Artist' }}
                    </div>

                    @if($album->year)
                        <div class="year">
                            📅 {{ $album->year }}
                        </div>
                    @endif

                    <div class="actions">

                        <a href="{{ route('albums.edit', $album->id) }}" class="edit-btn">
                            ✏️ Edit
                        </a>

                        <form
                            action="{{ route('albums.destroy', $album->id) }}"
                            method="POST"
                            style="flex:1;"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-btn"
                                style="width:100%;"
                                onclick="return confirm('Are you sure you want to delete this album?')"
                            >
                                🗑️ Delete
                            </button>
                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty">
            <h2>No Albums Available</h2>
            <p style="margin-top:10px;">Add your first album above.</p>
        </div>

    @endif

</main>

</body>
</html>