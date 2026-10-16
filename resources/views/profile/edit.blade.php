<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SOUND Group | My Profile</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0b12;
            color: #ffffff;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 245px;
            background: linear-gradient(180deg, #151525, #0d0d15);
            border-right: 1px solid #29293d;
            padding: 25px 16px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
        }

        .logo {
            font-size: 25px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 35px;
            letter-spacing: 1px;
        }

        .logo span {
            color: #9b5cff;
        }

        .profile-box {
            background: #1c1c2d;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: center;
        }

        .profile-icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #713cff, #ff3d81);
            font-size: 23px;
        }

        .profile-box h3 {
            font-size: 14px;
            margin-bottom: 4px;
        }

        .profile-box p {
            color: #9b5cff;
            font-size: 11px;
        }

        .menu-title {
            color: #77778b;
            font-size: 11px;
            text-transform: uppercase;
            margin: 20px 10px 10px;
            letter-spacing: 1px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .menu a {
            padding: 13px 14px;
            border-radius: 11px;
            color: #bdbdca;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 11px;
            transition: .2s;
        }

        .menu a:hover,
        .menu a.active {
            color: white;
            background: linear-gradient(90deg, #713cff, #9b5cff);
        }

        .logout {
            margin-top: 25px;
            width: 100%;
            border: 1px solid #29293d;
            background: #151525;
            color: #ff6b9d;
            padding: 12px;
            border-radius: 11px;
            cursor: pointer;
            font-size: 13px;
        }

        .main {
            margin-left: 245px;
            width: calc(100% - 245px);
            padding: 40px;
        }

        .topbar {
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 29px;
            margin-bottom: 8px;
        }

        .topbar p {
            color: #858597;
            font-size: 13px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 15px;
            margin-bottom: 25px;
            border-radius: 9px;
            background: #151525;
            border: 1px solid #29293d;
            color: #bdbdca;
            font-size: 12px;
            transition: .2s;
        }

        .back-button:hover {
            color: #ffffff;
            border-color: #713cff;
        }

        .profile-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .profile-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 22px;
        }

        .profile-section-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 20px;
            margin-bottom: 24px;
            border-bottom: 1px solid #29293d;
        }

        .section-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #713cff, #9b5cff);
            font-size: 21px;
        }

        .profile-section-header h2 {
            font-size: 19px;
            margin-bottom: 5px;
        }

        .profile-section-header p {
            color: #858597;
            font-size: 12px;
            line-height: 1.5;
        }

        .profile-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            color: #d7d7e5;
            font-size: 13px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 13px 15px;
            background: #0f0f19;
            color: #ffffff;
            border: 1px solid #303047;
            border-radius: 10px;
            outline: none;
            font-size: 13px;
            transition: .2s;
        }

        .form-group input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, .12);
        }

        .form-group input::placeholder {
            color: #66667a;
        }

        .error-message {
            color: #ff6b8a;
            font-size: 11px;
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 5px;
        }

        .save-button {
            border: none;
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            padding: 12px 22px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            transition: .2s;
        }

        .save-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 18px rgba(113, 60, 255, .3);
        }

        .saved-message {
            color: #67e8a5;
            font-size: 12px;
        }

        .verification-box {
            background: #1b1929;
            border: 1px solid #35304e;
            border-radius: 10px;
            padding: 15px;
        }

        .verification-box p {
            color: #bdbdca;
            font-size: 12px;
            margin-bottom: 9px;
        }

        .verification-button {
            background: transparent;
            color: #a875ff;
            border: none;
            padding: 0;
            cursor: pointer;
            font-size: 12px;
        }

        .success-message {
            color: #67e8a5 !important;
            margin-top: 10px;
        }

        .danger-card {
            border-color: #422536;
        }

        .danger-icon {
            background: linear-gradient(135deg, #b52d62, #ff3d81);
        }

        .delete-warning {
            background: #24151d;
            border: 1px solid #4a2636;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 18px;
        }

        .delete-warning p {
            color: #c9a7b4;
            font-size: 12px;
            line-height: 1.6;
        }

        .delete-button {
            background: #a92f5d;
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        .delete-button:hover {
            background: #c93669;
        }

        .delete-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .78);
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 1000;
        }

        .delete-modal-box {
            width: 100%;
            max-width: 480px;
            background: #151525;
            border: 1px solid #3b3045;
            border-radius: 18px;
            padding: 30px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .5);
        }

        .close-modal {
            position: absolute;
            right: 18px;
            top: 14px;
            background: transparent;
            border: none;
            color: #858597;
            font-size: 25px;
            cursor: pointer;
        }

        .modal-icon {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #351c28;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .delete-modal-box h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .delete-modal-box>p {
            color: #9292a3;
            font-size: 12px;
            line-height: 1.6;
            margin-bottom: 22px;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .cancel-button {
            background: #242438;
            border: 1px solid #34344a;
            color: #c9c9d8;
            padding: 11px 18px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 12px;
        }

        .confirm-delete-button {
            background: linear-gradient(90deg, #a92f5d, #e23c73);
            border: none;
            color: white;
            padding: 11px 18px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
                width: calc(100% - 210px);
                padding: 25px;
            }
        }

        @media (max-width: 600px) {
            .layout {
                display: block;
            }

            .sidebar {
                position: relative;
                width: 100%;
            }

            .main {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            .profile-container {
                max-width: 100%;
            }

            .profile-card {
                padding: 20px;
            }

            .modal-actions {
                flex-direction: column;
            }

            .cancel-button,
            .confirm-delete-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="layout">

        <aside class="sidebar">

            <div class="logo">
                SOUND <span>GROUP</span>
            </div>

            <div class="profile-box">

                <div class="profile-icon">
                    👤
                </div>

                <h3>{{ auth()->user()->name }}</h3>

                <p>USER ACCOUNT</p>

            </div>

            <div class="menu-title">
                Main Menu
            </div>

            <div class="menu">

                <a href="{{ route('dashboard') }}">
                    🏠 Dashboard
                </a>

                <a href="{{ route('user.music') }}">
                    🎵 Music
                </a>

                <a href="{{ route('user.videos') }}">
                    🎬 Videos
                </a>

                <a href="{{ route('user.music') }}">
                    🔎 Search Music
                </a>

                <a href="{{ route('user.reviews') }}">
                    ⭐ My Reviews & Ratings
                </a>

                <a href="{{ route('profile.edit') }}" class="active">
                    👤 My Profile
                </a>

            </div>

            <div class="menu-title">
                Account
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout">
                    🚪 Logout
                </button>
            </form>

        </aside>

        <main class="main">

            <div class="topbar">

                <h1>My Profile</h1>

                <p>
                    Manage your personal information, password and account.
                </p>

            </div>

            <div class="profile-container">

                <a href="{{ route('dashboard') }}" class="back-button">
                    ← Back to Dashboard
                </a>

                <div class="profile-card">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <div class="profile-card">
                    @include('profile.partials.update-password-form')
                </div>

                <div class="profile-card danger-card">
                    @include('profile.partials.delete-user-form')
                </div>

            </div>

        </main>

    </div>

</body>

</html>