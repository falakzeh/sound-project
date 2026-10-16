<x-guest-layout>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0b0612;
            color: white;
        }

        .sound-login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #0b0612, #24103d, #090509);
        }

        .sound-login-container {
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #15101d;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }

        /* LEFT SIDE */

        .login-left {
            padding: 55px 45px;
            background: linear-gradient(145deg, #7026c9, #c12c9e, #ef3c75);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .sound-logo {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 35px;
        }

        .sound-icon {
            width: 55px;
            height: 55px;
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .sound-logo h1 {
            margin: 0;
            font-size: 32px;
            letter-spacing: 3px;
        }

        .platform {
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: 0.85;
            margin-bottom: 12px;
        }

        .login-left h2 {
            font-size: 42px;
            line-height: 1.15;
            margin: 0;
        }

        .description {
            margin-top: 20px;
            line-height: 1.7;
            color: rgba(255,255,255,0.85);
        }

        .features {
            margin-top: 30px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 18px 0;
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        /* RIGHT SIDE */

        .login-right {
            padding: 55px 45px;
        }

        .mobile-logo {
            display: none;
        }

        .welcome-text {
            color: #b36cff;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .login-right h2 {
            font-size: 32px;
            margin: 8px 0;
        }

        .subtitle {
            color: #999;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* DEMO ADMIN CREDENTIALS */
        .demo-credentials {
            margin: 0 0 24px;
            padding: 14px 16px;
            border: 1px solid rgba(179, 108, 255, 0.45);
            border-radius: 12px;
            background: rgba(116, 39, 209, 0.12);
        }

        .demo-credentials h3 {
            margin: 0 0 10px;
            color: #d4a8ff;
            font-size: 14px;
            letter-spacing: 0.3px;
        }

        .demo-credential-row {
            display: flex;
            flex-wrap: wrap;
            gap: 5px 8px;
            margin: 6px 0;
            color: #ddd;
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        .demo-credential-row strong {
            color: #fff;
            font-weight: 600;
        }

        .demo-credentials .demo-note {
            margin: 10px 0 0;
            color: #aaa;
            font-size: 11px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #ddd;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .form-control {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #3a3144;
            border-radius: 10px;
            background: #211a2b;
            color: white;
            font-size: 14px;
            outline: none;
        }

        .form-control:focus {
            border-color: #a83cff;
            box-shadow: 0 0 0 2px rgba(168,60,255,0.15);
        }

        .form-control::placeholder {
            color: #777;
        }

        .error {
            color: #ff6b81;
            font-size: 12px;
            margin-top: 5px;
        }

        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 13px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #999;
        }

        .remember input {
            accent-color: #9b3cff;
        }

        .forgot {
            color: #b66cff;
            text-decoration: none;
        }

        .forgot:hover {
            color: #ed4caa;
        }

        .login-button {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #7427d1, #df3d92);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-button:hover {
            opacity: 0.9;
        }

        .register-text {
            text-align: center;
            margin-top: 25px;
            color: #888;
            font-size: 13px;
        }

        .register-text a {
            color: #b66cff;
            text-decoration: none;
            font-weight: bold;
        }

        .register-text a:hover {
            color: #ed4caa;
        }

        /* MOBILE */

        @media (max-width: 800px) {

            .sound-login-container {
                grid-template-columns: 1fr;
            }

            .login-left {
                display: none;
            }

            .mobile-logo {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 25px;
            }

            .mobile-logo .sound-icon {
                width: 45px;
                height: 45px;
                font-size: 22px;
            }

            .mobile-logo h1 {
                margin: 0;
                font-size: 24px;
            }

            .login-right {
                padding: 35px 25px;
            }

            .login-right h2 {
                font-size: 27px;
            }
        }
    </style>


    <div class="sound-login-page">

        <div class="sound-login-container">

            <!-- LEFT SIDE -->

            <div class="login-left">

                <div class="sound-logo">

                    <div class="sound-icon">
                        🎵
                    </div>

                    <h1>SOUND</h1>

                </div>

                <div class="platform">
                    Entertainment Platform
                </div>

                <h2>
                    Welcome Back.<br>
                    Feel the Music.
                </h2>

                <p class="description">
                    Login to your SOUND Group account and continue
                    exploring music, videos, artists and albums.
                </p>

                <div class="features">

                    <div class="feature">
                        <div class="feature-icon">🎧</div>
                        <span>Listen to Your Favourite Music</span>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">🎬</div>
                        <span>Watch Music Videos</span>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">⭐</div>
                        <span>Rate & Review Your Favourites</span>
                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->

            <div class="login-right">

                <div class="mobile-logo">

                    <div class="sound-icon">
                        🎵
                    </div>

                    <div>
                        <h1>SOUND</h1>

                        <small style="color:#888;">
                            Entertainment
                        </small>
                    </div>

                </div>


                <div class="welcome-text">
                    Welcome to SOUND Group
                </div>

                <h2>
                    Login to Your Account
                </h2>

                <p class="subtitle">
                    Enter your details to continue.
                </p>


                <!-- DEMO ADMIN LOGIN DETAILS -->
                <div class="demo-credentials" aria-label="Practice project admin login details">
                    <h3>🔐 Demo Admin Credentials</h3>

                    <div class="demo-credential-row">
                        <strong>Username / Email:</strong>
                        <span>admin@soundgroup.com</span>
                    </div>

                    <div class="demo-credential-row">
                        <strong>Password:</strong>
                        <span>admin123</span>
                    </div>

                    <p class="demo-note">
                        For practice project demonstration only.
                    </p>
                </div>


                <x-auth-session-status
                    class="mb-4"
                    :status="session('status')"
                />


                <form method="POST" action="{{ route('login') }}">

                    @csrf


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            id="email"
                            class="form-control"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="example@email.com"
                        >

                        @error('email')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label for="password">
                            Password
                        </label>

                        <input
                            id="password"
                            class="form-control"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Enter your password"
                        >

                        @error('password')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- REMEMBER + FORGOT -->

                    <div class="remember-row">

                        <label class="remember">

                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                            >

                            <span>
                                Remember me
                            </span>

                        </label>


                        @if (Route::has('password.request'))

                            <a
                                class="forgot"
                                href="{{ route('password.request') }}"
                            >
                                Forgot Password?
                            </a>

                        @endif

                    </div>


                    <!-- LOGIN BUTTON -->

                    <button
                        type="submit"
                        class="login-button"
                    >
                        🎵 Login to SOUND
                    </button>


                    <!-- REGISTER: show only when the register route exists -->
                    @if (Route::has('register'))
                        <div class="register-text">
                            Don't have an account?
                            <a href="{{ route('register') }}">
                                Create Account
                            </a>
                        </div>
                    @endif

                </form>

            </div>

        </div>

    </div>

</x-guest-layout>