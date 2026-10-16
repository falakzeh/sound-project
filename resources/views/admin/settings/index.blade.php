<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOUND Group - Website Settings</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
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

        .admin-info {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid #29293d;
            margin-bottom: 25px;
        }

        .admin-icon {
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

        .admin-info h3 {
            font-size: 16px;
            margin-top: 12px;
        }

        .admin-info p {
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
            width: calc(100% - 245px);
        }

        .topbar {
            background: #151525;
            border: 1px solid #29293d;
            padding: 22px 25px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .topbar h1 {
            font-size: 27px;
        }

        .topbar h1 span {
            color: #9b5cff;
        }

        .topbar p {
            color: #9999aa;
            margin-top: 6px;
            font-size: 14px;
        }

        .date {
            color: #9b5cff;
            font-size: 14px;
            font-weight: bold;
        }

        .settings-box {
            background: #151525;
            border: 1px solid #29293d;
            padding: 30px;
            border-radius: 15px;
            width: 100%;
        }

        .settings-title {
            margin-bottom: 25px;
        }

        .settings-title h2 {
            font-size: 21px;
            margin-bottom: 6px;
        }

        .settings-title p {
            color: #9999aa;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        .form-group label {
            display: block;
            color: #bdbdcc;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            display: block;
            padding: 13px 14px;
            background: #0f0f19;
            color: white;
            border: 1px solid #343447;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #666678;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, .12);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            width: 100%;
        }

        .save-btn {
            padding: 12px 24px;
            border: none;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            color: white;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(113, 60, 255, .20);
        }

        .save-btn:hover {
            opacity: .9;
        }

        .back-btn {
            display: inline-block;
            margin-left: 10px;
            padding: 11px 20px;
            background: #252533;
            color: #bbb;
            border: 1px solid #3a3a4d;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
        }

        .back-btn:hover {
            background: #30303f;
            color: white;
        }

        .success {
            background: #152d22;
            color: #7ee2a8;
            border: 1px solid #24563b;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .error {
            background: #35171d;
            color: #ff9eab;
            border: 1px solid #71313c;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .error ul {
            margin-top: 8px;
            padding-left: 20px;
        }

        @media (max-width: 900px) {

            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
                padding: 20px;
            }

            .row {
                grid-template-columns: 1fr;
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
                width: 100%;
                padding: 15px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .settings-box {
                padding: 20px;
            }

            .row {
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


        <div class="admin-info">

            <div class="admin-icon">
                👑
            </div>

            <h3>
                {{ auth()->user()?->name ?? 'Administrator' }}
            </h3>

            <p>
                Administrator
            </p>

        </div>


        <div class="menu-title">
            Main Menu
        </div>


        <nav class="menu">

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

            <a href="{{ route('admin.users') }}">
                👥 Users
            </a>

            <a href="{{ route('admin.settings') }}" class="active">
                ⚙️ Website Settings
            </a>

        </nav>


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
        <div class="topbar">

            <div>

                <h1>
                    Website <span>Settings</span>
                </h1>

                <p>
                    Manage your SOUND Group website information.
                </p>

            </div>

            <div class="date">
                SOUND GROUP
            </div>

        </div>


        <div class="settings-box">


            <div class="settings-title">

                <h2>
                    Website Information
                </h2>

                <p>
                    Update the information displayed on your website.
                </p>

            </div>


            @if(session('success'))

                <div class="success">
                    {{ session('success') }}
                </div>

            @endif


            @if($errors->any())

                <div class="error">

                    Please correct the following errors:

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form method="POST" action="{{ route('admin.settings.update') }}">

                @csrf

                @method('PUT')


                <!-- Website Name field removed -->
                <!-- SOUND Group name is now fixed -->


                <div class="form-group">

                    <label for="description">
                        Website Description
                    </label>

                    <textarea id="description" name="description"
                        placeholder="Enter website description">{{ old('description', $settings->description ?? '') }}</textarea>

                </div>


                <div class="row">

                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email', $settings->email ?? '') }}"
                            placeholder="example@email.com">

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone
                        </label>

                        <input type="text" id="phone" name="phone" value="{{ old('phone', $settings->phone ?? '') }}"
                            placeholder="+92 300 1234567">

                    </div>

                </div>


                <div class="form-group">

                    <label for="address">
                        Address
                    </label>

                    <textarea id="address" name="address"
                        placeholder="Enter website/company address">{{ old('address', $settings->address ?? '') }}</textarea>

                </div>


                <button type="submit" class="save-btn">
                    💾 Save Settings
                </button>


                <a href="{{ route('dashboard') }}" class="back-btn">
                    ← Back to Dashboard
                </a>


            </form>


        </div>

    </main>
</body>

</html>