<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

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

        .form-card {
            width: 100%;
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 15px;
            padding: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
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
            color: #bdbdcc;
            font-size: 13px;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 14px;
            background: #0f0f19;
            color: white;
            border: 1px solid #343447;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, .12);
        }

        select option {
            background: #151525;
            color: white;
        }

        .password-note {
            color: #77778a;
            font-size: 12px;
            margin-top: 6px;
        }

        .error {
            color: #ff8d9d;
            font-size: 12px;
            margin-top: 6px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 28px;
        }

        .btn {
            padding: 11px 22px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .update-btn {
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .20);
        }

        .update-btn:hover {
            opacity: .9;
        }

        .cancel-btn {
            background: #252533;
            color: #bbb;
            border: 1px solid #3a3a4d;
        }

        .cancel-btn:hover {
            background: #30303f;
            color: white;
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                width: 180px;
            }

            .main {
                margin-left: 180px;
                padding: 15px;
            }

            .form-card {
                padding: 20px;
            }

            .top h1 {
                font-size: 24px;
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
            ✏️ Edit <span>User</span>
        </h1>

        <p>
            Update the user's information and account details.
        </p>

    </div>


    @if ($errors->any())

        <div style="
            background:#35171d;
            border:1px solid #71313c;
            color:#ff9eab;
            padding:13px 16px;
            border-radius:9px;
            margin-bottom:20px;
        ">

            <strong>Please fix the following errors:</strong>

            <ul style="margin-top:8px; padding-left:20px;">

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="form-card">

        <form
            method="POST"
            action="{{ route('admin.users.update', $user->id) }}"
        >

            @csrf

            @method('PUT')

            <div class="form-grid">

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        required
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="user_id">
                        User ID
                    </label>

                    <input
                        type="text"
                        id="user_id"
                        name="user_id"
                        value="{{ old('user_id', $user->user_id) }}"
                        required
                    >

                    @error('user_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        required
                    >

                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="phone">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', $user->phone) }}"
                    >

                    @error('phone')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group full">

                    <label for="address">
                        Address
                    </label>

                    <input
                        type="text"
                        id="address"
                        name="address"
                        value="{{ old('address', $user->address) }}"
                    >

                    @error('address')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="role">
                        Role
                    </label>

                    <select
                        id="role"
                        name="role"
                        required
                    >

                        <option
                            value="user"
                            {{ old('role', $user->role) == 'user' ? 'selected' : '' }}
                        >
                            User
                        </option>

                        <option
                            value="admin"
                            {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}
                        >
                            Administrator
                        </option>

                    </select>

                    @error('role')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password">
                        New Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                    >

                    <div class="password-note">
                        Leave blank if you do not want to change the password.
                    </div>

                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password_confirmation">
                        Confirm New Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                    >

                </div>

            </div>


            <div class="buttons">

                <button
                    type="submit"
                    class="btn update-btn"
                >
                    💾 Update User
                </button>

                <a
                    href="{{ route('admin.users') }}"
                    class="btn cancel-btn"
                >
                    ✖️ Cancel
                </a>

            </div>

        </form>

    </div>

</main>

</body>
</html>