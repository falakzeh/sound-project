<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reviews - SOUND Group</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #0b0b12;
            color: white;
            font-family: Arial, sans-serif;
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
            z-index: 1000;
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 30px;
        }

        .logo span {
            color: #9b5cff;
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
            box-shadow: 0 0 25px rgba(139, 92, 246, 0.35);
        }

        .profile-name {
            text-align: center;
            color: #ddd;
            margin: 12px 0 30px;
            font-size: 14px;
        }

        .menu-title {
            color: #77778a;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 20px 8px 10px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 7px;
            border-radius: 9px;
            color: #bdbdca;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .menu-link:hover,
        .menu-link.active {
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            box-shadow: 0 7px 20px rgba(113, 60, 255, 0.25);
        }

        .logout-btn {
            width: 100%;
            margin-top: 18px;
            padding: 12px;
            border-radius: 9px;
            background: #171724;
            border: 1px solid #303044;
            color: #ddd;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: #9b5cff;
            color: white;
        }

        .main {
            margin-left: 245px;
            min-height: 100vh;
            padding: 35px;
        }

        .page-title {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .page-subtitle {
            color: #858596;
            margin-bottom: 30px;
        }

        .success {
            background: #162b20;
            border: 1px solid #275c40;
            color: #8ff0b7;
            padding: 12px 15px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .error {
            background: #351820;
            border: 1px solid #67303b;
            color: #ff9aaa;
            padding: 12px 15px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 22px;
        }

        .review-card {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 22px;
            transition: 0.3s;
        }

        .review-card:hover {
            transform: translateY(-4px);
            border-color: #7547ff;
            box-shadow: 0 15px 35px rgba(113, 60, 255, 0.15);
        }

        .type-badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 7px;
            background: #292044;
            color: #c4a7ff;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 13px;
        }

        .item-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .details {
            color: #9292a5;
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .rating {
            color: #facc15;
            font-size: 18px;
            margin-bottom: 12px;
        }

        .review-text {
            background: #10101b;
            border: 1px solid #29293d;
            border-radius: 9px;
            padding: 13px;
            color: #c4c4d2;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .review-text.empty-review {
            color: #77778a;
            font-style: italic;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .edit-btn,
        .delete-btn {
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .edit-btn {
            background: #30204d;
            border: 1px solid #633fa0;
            color: #c9a8ff;
        }

        .delete-btn {
            background: #3a1820;
            border: 1px solid #662331;
            color: #ff8a9b;
        }

        .edit-form {
            display: none;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #29293d;
        }

        .edit-form.show {
            display: block;
        }

        .edit-form select,
        .edit-form textarea {
            width: 100%;
            background: #0d0d16;
            border: 1px solid #303044;
            border-radius: 8px;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            outline: none;
        }

        .edit-form textarea {
            min-height: 90px;
            resize: vertical;
        }

        .edit-form select:focus,
        .edit-form textarea:focus {
            border-color: #9b5cff;
        }

        .save-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #713cff, #9b5cff);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .empty {
            background: #151525;
            border: 1px solid #29293d;
            border-radius: 16px;
            padding: 70px 20px;
            text-align: center;
            color: #88889b;
        }

        .empty-icon {
            font-size: 55px;
            margin-bottom: 15px;
        }

        .empty h3 {
            color: white;
        }

        @media(max-width: 850px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }

            .review-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 650px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <div class="logo">
            SOUND<span>GROUP</span>
        </div>

        <div class="profile-icon">
            👤
        </div>

        <div class="profile-name">
            {{ auth()->user()->name }}
        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <a href="{{ route('dashboard') }}" class="menu-link">
            🏠
            Dashboard
        </a>

        <a href="{{ route('user.music') }}" class="menu-link">
            🎵
            Music
        </a>

        <a href="{{ route('user.videos') }}" class="menu-link">
            🎬
            Videos
        </a>

        <a href="{{ route('user.music') }}" class="menu-link">
            🔍
            Search Muisc
        </a>

        <a href="{{ route('user.reviews') }}" class="menu-link active">
            ⭐
            My Reviews & Ratings
        </a>

        <a href="{{ route('profile.edit') }}" class="menu-link">
            👤
            My Profile
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="logout-btn">
                🚪 Logout
            </button>
        </form>

    </div>
    <div class="main">
        <div class="page-title">
            ⭐ My Reviews & Ratings
        </div>

        <div class="page-subtitle">
            View and manage your Music and Video reviews
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

        @if($reviews->count() > 0)

            <div class="review-grid">

                @foreach($reviews as $review)

                    <div class="review-card">

                        @if($review->music)

                            <div class="type-badge">
                                🎵 MUSIC
                            </div>

                            <div class="item-title">
                                {{ $review->music->name }}
                            </div>

                            <div class="details">

                                🎤 Artist:
                                {{ $review->music->artist->name ?? 'Unknown Artist' }}

                                <br>

                                💿 Album:
                                {{ $review->music->album->name ?? 'Unknown Album' }}

                            </div>

                        @elseif($review->video)

                            <div class="type-badge">
                                🎬 VIDEO
                            </div>

                            <div class="item-title">
                                {{ $review->video->title }}
                            </div>

                            <div class="details">

                                🎤 Artist:
                                {{ $review->video->artist->name ?? 'Unknown Artist' }}

                                <br>

                                💿 Album:
                                {{ $review->video->album->name ?? 'Unknown Album' }}

                            </div>

                        @endif

                        <div class="rating">
                            {{ str_repeat('⭐', $review->rating) }}
                        </div>

                        @if($review->review)

                            <div class="review-text">
                                {{ $review->review }}
                            </div>

                        @else

                            <div class="review-text empty-review">
                                No written review added.
                            </div>

                        @endif

                        <div class="actions">

                            <button type="button" class="edit-btn" onclick="toggleEdit({{ $review->id }})">
                                ✏️ Edit
                            </button>

                            <form method="POST" action="{{ route('reviews.destroy', $review) }}"
                                onsubmit="return confirm('Are you sure you want to delete this review?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete-btn">
                                    🗑️ Delete
                                </button>

                            </form>

                        </div>

                        <div class="edit-form" id="edit-{{ $review->id }}">

                            <form method="POST" action="{{ route('reviews.update', $review) }}">

                                @csrf
                                @method('PUT')

                                <select name="rating" required>

                                    <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>
                                        ⭐ 1 Star
                                    </option>

                                    <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>
                                        ⭐⭐ 2 Stars
                                    </option>

                                    <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>
                                        ⭐⭐⭐ 3 Stars
                                    </option>

                                    <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>
                                        ⭐⭐⭐⭐ 4 Stars
                                    </option>

                                    <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>
                                        ⭐⭐⭐⭐⭐ 5 Stars
                                    </option>

                                </select>

                                <textarea name="review" placeholder="Write your review...">{{ $review->review }}</textarea>

                                <button type="submit" class="save-btn">
                                    💾 Save Changes
                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">

                <div class="empty-icon">
                    ⭐
                </div>

                <h3>No Reviews Yet</h3>

                <p>
                    You have not added any reviews or ratings yet.
                </p>

                <p>
                    Go to Music or Videos and add your first review.
                </p>

            </div>

        @endif

    </div>
    <script>
        function toggleEdit(id) {
            const form = document.getElementById('edit-' + id);

            if (form.classList.contains('show')) {
                form.classList.remove('show');
            } else {
                form.classList.add('show');
            }
        }
    </script>
</body>

</html>