<section>
    <div class="profile-section-header">
        <div class="section-icon">👤</div>

        <div>
            <h2>Profile Information</h2>
            <p>Update your account information and email address.</p>
        </div>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="profile-form">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Name</label>

            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus
                autocomplete="name">

            @if($errors->get('name'))
                <div class="error-message">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>

            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                autocomplete="username">

            @if($errors->get('email'))
                <div class="error-message">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())

            <div class="verification-box">
                <p>Your email address is unverified.</p>

                <button form="send-verification" type="submit" class="verification-button">
                    Click here to re-send the verification email.
                </button>

                @if (session('status') === 'verification-link-sent')
                    <p class="success-message">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>

        @endif

        <div class="form-actions">

            <button type="submit" class="save-button">
                Save Changes
            </button>

            @if (session('status') === 'profile-updated')
                <span class="saved-message">
                    ✓ Saved
                </span>
            @endif

        </div>
    </form>
</section>