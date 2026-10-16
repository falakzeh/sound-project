<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOUND Group | Admin Dashboard</title>

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


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;

            width: 245px;
            height: 100vh;

            background: linear-gradient(
                180deg,
                #151525,
                #0d0d15
            );

            border-right: 1px solid #29293d;

            padding: 25px 18px;

            overflow-y: auto;
            overflow-x: hidden;
        }


        /* Sidebar Scrollbar */

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


        /* =========================
           LOGO
        ========================= */

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


        /* =========================
           ADMIN PROFILE
        ========================= */

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

            background: linear-gradient(
                135deg,
                #8b5cf6,
                #ec4899
            );

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 30px;

            box-shadow:
                0 0 25px
                rgba(139, 92, 246, .35);
        }

        .admin-profile h3 {
            margin-top: 12px;

            font-size: 16px;
        }

        .admin-profile p {
            color: #9999aa;

            font-size: 13px;

            margin-top: 5px;
        }


        /* =========================
           MENU TITLE
        ========================= */

        .menu-title {
            color: #77778a;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 10px;

            padding-left: 12px;
        }


        /* =========================
           MENU
        ========================= */

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
        .menu .active {
            background: linear-gradient(
                90deg,
                #713cff,
                #9b5cff
            );

            color: white;

            box-shadow:
                0 5px 20px
                rgba(113, 60, 255, .25);
        }


        /* =========================
           LOGOUT
        ========================= */

        .logout {
            position: relative;

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


        /* =========================
           MAIN CONTENT
        ========================= */

        .main {
            margin-left: 245px;

            padding: 30px;

            min-height: 100vh;
        }


        /* =========================
           TOP BAR
        ========================= */

        .topbar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 30px;
        }

        .welcome h1 span {
            color: #a56cff;
        }

        .welcome p {
            color: #888899;

            margin-top: 7px;
        }

        .status {
            padding: 10px 15px;

            border-radius: 20px;

            background: #171720;

            border: 1px solid #2d2d40;

            color: #b9a0ff;

            font-size: 13px;
        }


        /* =========================
           STAT CARDS
        ========================= */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 32px;
        }

        .stat-card {
            padding: 22px;

            border-radius: 15px;

            background: #15151f;

            border: 1px solid #29293a;

            position: relative;

            overflow: hidden;

            transition: .3s;
        }

        .stat-card:hover {
            transform: translateY(-3px);

            border-color: #7545d9;
        }

        .stat-card::after {
            content: "";

            position: absolute;

            width: 80px;
            height: 80px;

            border-radius: 50%;

            background:
                rgba(155, 92, 255, .12);

            right: -25px;
            top: -25px;
        }

        .stat-icon {
            font-size: 27px;

            margin-bottom: 17px;
        }

        .stat-card h2 {
            font-size: 25px;

            margin-bottom: 5px;
        }

        .stat-card p {
            color: #858596;

            font-size: 13px;
        }


        /* =========================
           SECTION HEADING
        ========================= */

        .section-heading {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 18px;
        }

        .section-heading h2 {
            font-size: 20px;
        }

        .section-heading span {
            color: #8e8e9f;

            font-size: 13px;
        }


        /* =========================
           MANAGEMENT CARDS
        ========================= */

        .cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }

        .card {
            background: #15151f;

            border: 1px solid #29293a;

            border-radius: 15px;

            padding: 24px;

            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);

            border-color: #7545d9;

            box-shadow:
                0 10px 35px
                rgba(0,0,0,.35);
        }

        .card-icon {
            width: 52px;
            height: 52px;

            border-radius: 13px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 25px;

            background: linear-gradient(
                135deg,
                #6d3ce8,
                #b15cff
            );

            margin-bottom: 18px;
        }

        .card h3 {
            font-size: 17px;

            margin-bottom: 9px;
        }

        .card p {
            color: #858596;

            font-size: 13px;

            line-height: 1.6;

            min-height: 42px;

            margin-bottom: 20px;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {
            display: inline-block;

            padding: 9px 15px;

            border-radius: 8px;

            background: #242431;

            border: 1px solid #363648;

            color: #ddd;

            text-decoration: none;

            font-size: 13px;

            transition: .3s;
        }

        .btn:hover {
            background: #7945e8;

            border-color: #7945e8;

            color: white;
        }


        /* =========================
           MUSIC BANNER
        ========================= */

        .music-banner {
            margin-top: 25px;

            padding: 25px;

            border-radius: 16px;

            background:
                linear-gradient(
                    100deg,
                    #29155c,
                    #171729
                );

            border: 1px solid #3c2866;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .music-banner h2 {
            margin-bottom: 7px;
        }

        .music-banner p {
            color: #aaa0c2;

            font-size: 13px;
        }


        /* =========================
           MUSIC WAVES
        ========================= */

        .waves {
            display: flex;

            gap: 5px;

            align-items: center;

            height: 45px;
        }

        .waves span {
            width: 5px;

            border-radius: 10px;

            background: #a56cff;
        }

        .waves span:nth-child(1) {
            height: 15px;
        }

        .waves span:nth-child(2) {
            height: 30px;
        }

        .waves span:nth-child(3) {
            height: 42px;
        }

        .waves span:nth-child(4) {
            height: 25px;
        }

        .waves span:nth-child(5) {
            height: 38px;
        }

        .waves span:nth-child(6) {
            height: 18px;
        }

        .waves span:nth-child(7) {
            height: 32px;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1100px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .cards {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 750px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                overflow: visible;
            }

            .logout {
                position: relative;

                margin-top: 20px;

                left: auto;
                right: auto;
                bottom: auto;
            }

            .main {
                margin-left: 0;

                padding: 20px;
            }

            .stats,
            .cards {
                grid-template-columns: 1fr;
            }

            .topbar,
            .music-banner {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">


        <div class="logo">

            SOUND <span>GROUP</span>

        </div>


        <div class="admin-profile">


            <div class="profile-icon">

                👑

            </div>


            <h3>
                {{ auth()->user()->name }}
            </h3>


            <p>
                Administrator
            </p>


        </div>


        <div class="menu-title">

            Main Menu

        </div>


        <nav class="menu">


            <a href="{{ route('dashboard') }}"
               class="active">

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


            <a href="{{ route('admin.settings') }}">

                ⚙️ Website Settings

            </a>


        </nav>


        <!-- LOGOUT -->

        <div class="logout">


            <form method="POST"
                  action="{{ route('logout') }}">


                @csrf


                <button type="submit">

                    🚪 Logout

                </button>


            </form>


        </div>


    </aside>



    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main class="main">


        <!-- TOP BAR -->

        <div class="topbar">


            <div class="welcome">


                <h1>

                    Welcome back,

                    <span>
                        {{ auth()->user()->name }}
                    </span>

                    👋

                </h1>


                <p>

                    Here's what's happening
                    with your SOUND Group website.

                </p>


            </div>


            <div class="status">

                ● Admin Account

            </div>


        </div>



        <!-- =========================
             STATISTICS
        ========================= -->

        <div class="stats">


            <div class="stat-card">


                <div class="stat-icon">

                    🎵

                </div>


                <h2>

                    Music

                </h2>


                <p>

                    Manage your songs

                </p>


            </div>



            <div class="stat-card">


                <div class="stat-icon">

                    🎬

                </div>


                <h2>

                    Videos

                </h2>


                <p>

                    Manage music videos

                </p>


            </div>



            <div class="stat-card">


                <div class="stat-icon">

                    🎤

                </div>


                <h2>

                    Artists

                </h2>


                <p>

                    Manage artists

                </p>


            </div>



            <div class="stat-card">


                <div class="stat-icon">

                    💿

                </div>


                <h2>

                    Albums

                </h2>


                <p>

                    Manage albums

                </p>


            </div>


        </div>



        <!-- =========================
             QUICK MANAGEMENT
        ========================= -->

        <div class="section-heading">


            <h2>

                Quick Management

            </h2>


            <span>

                SOUND Group Admin Panel

            </span>


        </div>



        <div class="cards">


            <!-- MUSIC -->

            <div class="card">


                <div class="card-icon">

                    🎵

                </div>


                <h3>

                    Music Management

                </h3>


                <p>

                    Add and manage songs,
                    genres, languages,
                    artists and albums.

                </p>


                <a href="{{ route('music.index') }}"
                   class="btn">

                    Manage Music →

                </a>


            </div>



            <!-- VIDEOS -->

            <div class="card">


                <div class="card-icon">

                    🎬

                </div>


                <h3>

                    Video Management

                </h3>


                <p>

                    Add and manage music
                    videos for the website.

                </p>


                <a href="{{ route('videos.index') }}"
                   class="btn">

                    Manage Videos →

                </a>


            </div>



            <!-- ARTISTS -->

            <div class="card">


                <div class="card-icon">

                    🎤

                </div>


                <h3>

                    Artist Management

                </h3>


                <p>

                    Add and manage singers
                    and artists.

                </p>


                <a href="{{ route('artists.index') }}"
                   class="btn">

                    Manage Artists →

                </a>


            </div>



            <!-- ALBUMS -->

            <div class="card">


                <div class="card-icon">

                    💿

                </div>


                <h3>

                    Album Management

                </h3>


                <p>

                    Create and manage
                    music albums.

                </p>


                <a href="{{ route('albums.index') }}"
                   class="btn">

                    Manage Albums →

                </a>


            </div>



            <!-- USERS -->

            <div class="card">


                <div class="card-icon">

                    👥

                </div>


                <h3>

                    User Management

                </h3>


                <p>

                    Manage registered
                    SOUND Group users.

                </p>


                <a href="{{ route('admin.users') }}"
                   class="btn">

                    Manage Users →

                </a>


            </div>



            <!-- SETTINGS -->

            <div class="card">


                <div class="card-icon">

                    ⚙️

                </div>


                <h3>

                    Website Settings

                </h3>


                <p>

                    Manage website
                    information and settings.

                </p>


                <a href="{{ route('admin.settings') }}"
                   class="btn">

                    Settings →

                </a>


            </div>


        </div>



        <!-- =========================
             MUSIC BANNER
        ========================= -->

        <div class="music-banner">


            <div>


                <h2>

                    🎧 SOUND Group Music Platform

                </h2>


                <p>

                    Manage your entertainment
                    content from one place.

                </p>


            </div>



            <div class="waves">


                <span></span>

                <span></span>

                <span></span>

                <span></span>

                <span></span>

                <span></span>

                <span></span>


            </div>


        </div>


    </main>


</body>

</html>