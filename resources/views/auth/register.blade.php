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

        .sound-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #0b0612, #24103d, #090509);
        }

        .sound-container {
            width: 100%;
            max-width: 1100px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #15101d;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }

        /* LEFT SIDE */

        .sound-left {
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

        .sound-left h2 {
            font-size: 42px;
            line-height: 1.15;
            margin: 0;
        }

        .sound-description {
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

        .sound-right {
            padding: 45px;
        }

        .mobile-logo {
            display: none;
        }

        .join-text {
            color: #b36cff;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sound-right h2 {
            font-size: 32px;
            margin: 8px 0;
        }

        .subtitle {
            color: #999;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            color: #ddd;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .form-control {
            width: 100%;
            padding: 13px 15px;
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

        textarea.form-control {
            resize: vertical;
            min-height: 75px;
        }

        .form-control::placeholder {
            color: #777;
        }

        .help-text {
            color: #777;
            font-size: 11px;
            margin-top: 5px;
        }

        .error {
            color: #ff6b81;
            font-size: 12px;
            margin-top: 5px;
        }

        .info-box {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            color: #999;
            font-size: 12px;
            line-height: 1.5;
        }

        .check {
            width: 22px;
            height: 22px;
            min-width: 22px;
            border-radius: 50%;
            background: rgba(160,60,255,0.2);
            color: #b66cff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-button {
            width: 100%;
            margin-top: 22px;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #7427d1, #df3d92);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .register-button:hover {
            opacity: 0.9;
        }

        .login-text {
            text-align: center;
            margin-top: 22px;
            color: #888;
            font-size: 13px;
        }

        .login-text a {
            color: #b66cff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-text a:hover {
            color: #ed4caa;
        }

        /* MOBILE */

        @media (max-width: 800px) {

            .sound-container {
                grid-template-columns: 1fr;
            }

            .sound-left {
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

            .sound-right {
                padding: 30px 22px;
            }

            .sound-right h2 {
                font-size: 27px;
            }
        }
    </style>


    <div class="sound-page">

        <div class="sound-container">

            <!-- LEFT SIDE -->

            <div class="sound-left">

                <div class="sound-logo">
                    <div class="sound-icon">🎵</div>

                    <h1>SOUND</h1>
                </div>

                <div class="platform">
                    Entertainment Platform
                </div>

                <h2>
                    Feel the Music.<br>
                    Live the Vibe.
                </h2>

                <p class="sound-description">
                    Join SOUND Group and explore regional and English
                    music, videos, artists and albums all in one place.
                </p>

                <div class="features">

                    <div class="feature">
                        <div class="feature-icon">🎧</div>
                        <span>Discover Music & Videos</span>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">🎤</div>
                        <span>Explore Artists & Albums</span>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">⭐</div>
                        <span>Rate & Review Your Favourites</span>
                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->

            <div class="sound-right">

                <div class="mobile-logo">

                    <div class="sound-icon">🎵</div>

                    <div>
                        <h1>SOUND</h1>
                        <small style="color:#888;">
                            Entertainment
                        </small>
                    </div>

                </div>


                <div class="join-text">
                    Join SOUND Group
                </div>

                <h2>
                    Create Your Account
                </h2>

                <p class="subtitle">
                    Create an account to explore music and videos.
                </p>


                <form method="POST" action="{{ route('register') }}">

                    @csrf


                    <!-- FULL NAME -->

                    <div class="form-group">

                        <label for="name">
                            Full Name
                        </label>

                        <input
                            id="name"
                            class="form-control"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Enter your full name"
                        >

                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- USER ID -->

                    <div class="form-group">

                        <label for="user_id">
                            User ID
                        </label>

                        <input
                            id="user_id"
                            class="form-control"
                            type="text"
                            name="user_id"
                            value="{{ old('user_id') }}"
                            required
                            autocomplete="username"
                            placeholder="Choose a unique User ID"
                        >

                        <div class="help-text">
                            Your User ID must be unique.
                        </div>

                        @error('user_id')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- ADDRESS -->

                    <div class="form-group">

                        <label for="address">
                            Address
                        </label>

                        <textarea
                            id="address"
                            class="form-control"
                            name="address"
                            required
                            placeholder="Enter your complete address"
                        >{{ old('address') }}</textarea>

                        @error('address')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- PHONE -->

                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            id="phone"
                            class="form-control"
                            type="tel"
                            name="phone"
                            value="{{ old('phone') }}"
                            required
                            autocomplete="tel"
                            placeholder="03XX-XXXXXXX"
                        >

                        @error('phone')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


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
                            autocomplete="email"
                            placeholder="example@email.com"
                        >

                        @error('email')
                            <div class="error">{{ $message }}</div>
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
                            autocomplete="new-password"
                            placeholder="Create a password"
                        >

                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- CONFIRM PASSWORD -->

                    <div class="form-group">

                        <label for="password_confirmation">
                            Confirm Password
                        </label>

                        <input
                            id="password_confirmation"
                            class="form-control"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Confirm your password"
                        >

                        @error('password_confirmation')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- INFORMATION -->

                    <div class="info-box">

                        <div class="check">✓</div>

                        <div>
                            Your information is required to create your
                            SOUND Group account. You will be able to
                            review and rate music and videos.
                        </div>

                    </div>


                    <!-- REGISTER -->

                    <button type="submit" class="register-button">
                        🎵 Create SOUND Account
                    </button>


                    <!-- LOGIN -->

                    <div class="login-text">

                        Already have an account?

                        <a href="{{ route('login') }}">
                            Login here
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-guest-layout>