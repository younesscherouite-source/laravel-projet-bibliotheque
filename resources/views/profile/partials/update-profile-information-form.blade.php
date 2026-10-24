<section>
    <h2>{{ __('Profile Information') }}</h2>
    <p class="muted">{{ __("Update your account's profile information and email address.") }}</p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @foreach ($errors->get('name') as $message)
                <p class="form-error">{{ $message }}</p>
            @endforeach
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @foreach ($errors->get('email') as $message)
                <p class="form-error">{{ $message }}</p>
            @endforeach

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <p class="muted" style="margin-top: 8px;">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="link-button">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="form-status">{{ __('A new verification link has been sent to your email address.') }}</p>
                @endif
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <span class="form-status" style="margin: 0;">{{ __('Saved.') }}</span>
            @endif
        </div>
    </form>
</section>
