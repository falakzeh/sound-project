<section>
    <div class="profile-section-header">
        <div class="section-icon danger-icon">⚠️</div>

        <div>
            <h2>Delete Account</h2>
            <p>Permanently remove your account and associated data.</p>
        </div>
    </div>

    <div class="delete-warning">
        <p>
            Once your account is deleted, all of its resources and data will be permanently deleted.
        </p>
    </div>

    <button type="button" class="delete-button" onclick="document.getElementById('deleteModal').style.display='flex'">
        Delete Account
    </button>

    <div id="deleteModal" class="delete-modal">

        <div class="delete-modal-box">

            <button type="button" class="close-modal"
                onclick="document.getElementById('deleteModal').style.display='none'">
                ×
            </button>

            <div class="modal-icon">
                ⚠️
            </div>

            <h2>Delete Your Account?</h2>

            <p>
                This action cannot be undone. Please enter your password to confirm account deletion.
            </p>

            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="form-group">
                    <label for="delete_password">
                        Password
                    </label>

                    <input id="delete_password" name="password" type="password" placeholder="Enter your password">

                    @if($errors->userDeletion->get('password'))
                        <div class="error-message">
                            {{ $errors->userDeletion->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="modal-actions">

                    <button type="button" class="cancel-button"
                        onclick="document.getElementById('deleteModal').style.display='none'">
                        Cancel
                    </button>

                    <button type="submit" class="confirm-delete-button">
                        Delete Permanently
                    </button>

                </div>

            </form>

        </div>

    </div>
</section>