<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

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

        .success {
            background: #14291d;
            border: 1px solid #285c39;
            color: #7ee2a8;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #35171d;
            border: 1px solid #71313c;
            color: #ff9eab;
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .user-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .user-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 22px;
            transition: .3s;
        }

        .user-card:hover {
            transform: translateY(-4px);
            border-color: #7146c9;
            box-shadow: 0 10px 30px rgba(113, 60, 255, .12);
        }

        .user-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 18px;
        }

        .user-icon {
            width: 58px;
            height: 58px;
            flex-shrink: 0;
            border-radius: 50%;
            background: linear-gradient(135deg, #713cff, #ec4899);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
        }

        .user-header h2 {
            font-size: 19px;
            margin-bottom: 5px;
        }

        .user-id {
            color: #9999aa;
            font-size: 13px;
        }

        .info {
            border-top: 1px solid #29293d;
            padding-top: 15px;
            margin-bottom: 18px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 7px 0;
            font-size: 13px;
        }

        .info-label {
            color: #77778a;
        }

        .info-value {
            color: #d0d0dc;
            text-align: right;
            word-break: break-word;
        }

        .role {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 12px;
            background: #3a275d;
            color: #d7b9ff;
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

        @media (max-width: 750px) {

            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                padding: 20px;
            }

            .top h1 {
                font-size: 25px;
            }

            .user-grid {
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

        <a href="{{ route('videos.index') }}">
            🎬 Videos
        </a>

        <a href="{{ route('artists.index') }}">
            🎤 Artists
        </a>

        <a href="{{ route('albums.index') }}">
            💿 Albums
        </a>

        <a href="{{ route('admin.users') }}" class="active">
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

        <h1>
            👥 User <span>Management</span>
        </h1>

        <p>
            View, edit and manage registered users on SOUND Group.
        </p>

    </div>

    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif

    @if(session('error'))

        <div class="error-message">
            {{ session('error') }}
        </div>

    @endif

    @if($users->count() > 0)

        <div class="user-grid">

            @foreach($users as $user)

                <div class="user-card">

                    <div class="user-header">

                        <div class="user-icon">
                            👤
                        </div>

                        <div>

                            <h2>
                                {{ $user->name }}
                            </h2>

                            <div class="user-id">
                                User ID:
                                {{ $user->user_id ?? 'N/A' }}
                            </div>

                        </div>

                    </div>

                    <div class="info">

                        <div class="info-row">

                            <span class="info-label">
                                Email
                            </span>

                            <span class="info-value">
                                {{ $user->email }}
                            </span>

                        </div>

                        <div class="info-row">

                            <span class="info-label">
                                Phone
                            </span>

                            <span class="info-value">
                                {{ $user->phone ?? 'N/A' }}
                            </span>

                        </div>

                        <div class="info-row">

                            <span class="info-label">
                                Address
                            </span>

                            <span class="info-value">
                                {{ $user->address ?? 'N/A' }}
                            </span>

                        </div>

                        <div class="info-row">

                            <span class="info-label">
                                Role
                            </span>

                            <span class="role">
                                {{ ucfirst($user->role ?? 'user') }}
                            </span>

                        </div>

                    </div>

                    <div class="actions">

                        <a
                            href="{{ route('admin.users.edit', $user->id) }}"
                            class="edit-btn"
                        >
                            ✏️ Edit
                        </a>

                        <form
                            action="{{ route('admin.users.destroy', $user->id) }}"
                            method="POST"
                            style="flex:1;"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-btn"
                                style="width:100%;"
                                onclick="return confirm('Are you sure you want to delete this user?')"
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

            <h2>
                No Users Available
            </h2>

            <p style="margin-top:10px;">
                No registered users found.
            </p>

        </div>

    @endif

</main>

</body>
</html>