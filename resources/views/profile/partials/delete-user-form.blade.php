<section>
    <h2>{{ __('Delete Account') }}</h2>
    <p class="muted">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>

    <details class="delete-box" @if ($errors->userDeletion->isNotEmpty()) open @endif>
        <summary>{{ __('Delete Account') }}</summary>

        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <p style="margin-top: 0;">
                <strong>{{ __('Are you sure you want to delete your account?') }}</strong><br>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" placeholder="{{ __('Password') }}">
                @foreach ($errors->userDeletion->get('password') as $message)
                    <p class="form-error">{{ $message }}</p>
                @endforeach
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
            </div>
        </form>
    </details>
</section>
