<section>
    <div class="profile-section-header">
        <div class="section-icon">🔐</div>

        <div>
            <h2>Update Password</h2>
            <p>Keep your account secure with a strong password.</p>
        </div>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="profile-form">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="update_password_current_password">
                Current Password
            </label>

            <input id="update_password_current_password" name="current_password" type="password"
                autocomplete="current-password">

            @if($errors->updatePassword->get('current_password'))
                <div class="error-message">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="update_password_password">
                New Password
            </label>

            <input id="update_password_password" name="password" type="password" autocomplete="new-password">

            @if($errors->updatePassword->get('password'))
                <div class="error-message">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="update_password_password_confirmation">
                Confirm Password
            </label>

            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                autocomplete="new-password">

            @if($errors->updatePassword->get('password_confirmation'))
                <div class="error-message">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        <div class="form-actions">

            <button type="submit" class="save-button">
                Update Password
            </button>

            @if (session('status') === 'password-updated')
                <span class="saved-message">
                    ✓ Password Updated
                </span>
            @endif

        </div>
    </form>
</section>