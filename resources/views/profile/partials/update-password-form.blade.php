<section>
    <h2>{{ __('Update Password') }}</h2>
    <p class="muted">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="update_password_current_password">{{ __('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password">
            @foreach ($errors->updatePassword->get('current_password') as $message)
                <p class="form-error">{{ $message }}</p>
            @endforeach
        </div>

        <div class="form-group">
            <label for="update_password_password">{{ __('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password">
            @foreach ($errors->updatePassword->get('password') as $message)
                <p class="form-error">{{ $message }}</p>
            @endforeach
        </div>

        <div class="form-group">
            <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
            @foreach ($errors->updatePassword->get('password_confirmation') as $message)
                <p class="form-error">{{ $message }}</p>
            @endforeach
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <span class="form-status" style="margin: 0;">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>
