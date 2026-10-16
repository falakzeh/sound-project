<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artist - SOUND Group</title>

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
            box-shadow: 0 0 25px rgba(139, 92, 246, 0.4);
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
            transition: 0.3s;
        }

        .menu a:hover,
        .menu a.active {
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 5px 20px rgba(113, 60, 255, 0.25);
        }

        .logout {
            margin-top: 25px;
        }

        .logout button {
            width: 100%;
            padding: 11px;
            border: 1px solid #343447;
            border-radius: 9px;
            background: #171720;
            color: #bbb;
            cursor: pointer;
            font-size: 14px;
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
            font-size: 14px;
        }

        .back-btn {
            text-decoration: none;
            color: white;
            background: #252533;
            border: 1px solid #39394c;
            padding: 11px 18px;
            border-radius: 9px;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #713cff;
            border-color: #713cff;
        }

        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .error {
            background: rgba(239, 68, 68, 0.12);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }

        .form-card {
            width: 100%;
            background: linear-gradient(145deg, #171725, #10101a);
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #d7d7e2;
            font-size: 14px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #36364a;
            border-radius: 9px;
            background: #0d0d16;
            color: white;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.12);
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .update-btn,
        .reset-btn,
        .cancel-btn {
            padding: 12px 22px;
            border-radius: 9px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .update-btn {
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            border: none;
            box-shadow: 0 5px 20px rgba(113, 60, 255, 0.25);
        }

        .update-btn:hover {
            transform: translateY(-1px);
        }

        .reset-btn {
            background: #252533;
            color: #ccc;
            border: 1px solid #39394c;
        }

        .reset-btn:hover {
            background: #303044;
            color: white;
        }

        .cancel-btn {
            background: #171720;
            color: #bbb;
            border: 1px solid #343447;
        }

        .cancel-btn:hover {
            background: #252533;
            color: white;
        }

        @media (max-width: 750px) {
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

            .buttons {
                flex-direction: column;
            }

            .update-btn,
            .reset-btn,
            .cancel-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<div class="sidebar">

    <div class="logo">
        SO<span>U</span>ND
    </div>

    <div class="admin-profile">
        <div class="profile-icon">👑</div>

        <h3>{{ auth()->user()->name ?? 'Administrator' }}</h3>

        <p>Administrator</p>
    </div>

    <div class="menu">

        <div class="menu-title">Main Menu</div>

        <a href="{{ route('dashboard') }}">
            🏠
            <span>Dashboard</span>
        </a>

        <a href="{{ route('music.index') }}">
            🎵
            <span>Music</span>
        </a>

        <a href="{{ route('videos.index') }}">
            🎬
            <span>Videos</span>
        </a>

        <a href="{{ route('artists.index') }}" class="active">
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

    </div>

    <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">
                🚪 Logout
            </button>
        </form>
    </div>

</div>

<div class="main">

    <div class="top-header">

        <div>
            <h1>🎤 Edit Artist</h1>
            <p>Update artist information</p>
        </div>

        <a href="{{ route('artists.index') }}" class="back-btn">
            ← Back to Artists
        </a>

    </div>

    @if($errors->any())
        <div class="alert error">

            <strong>Please fix the following errors:</strong>

            <ul style="margin: 8px 0 0 20px;">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>
    @endif

    <div class="form-card">

        <form action="{{ route('artists.update', $artist->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label>Artist Name</label>

                <input type="text"
                       name="name"
                       value="{{ old('name', $artist->name) }}"
                       placeholder="Enter artist name"
                       required>

            </div>

            <div class="buttons">

                <button type="submit" class="update-btn">
                    💾 Update Artist
                </button>

                <button type="reset" class="reset-btn">
                    ↻ Reset
                </button>

                <a href="{{ route('artists.index') }}"
                   class="cancel-btn">
                    ✕ Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>