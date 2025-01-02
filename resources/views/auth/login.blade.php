<x-guest-layout>
    <style>
        body {
            background-color: #222222;
            color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .form-label {
            color: #4caf50;
        }

        .form-input {
            display: block;
            width: 100%;
            margin-top: 0.5rem;
            padding: 0.75rem;
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #4caf50;
            border-radius: 8px;
        }

        .form-input:focus {
            outline: none;
            border-color: #4caf50;
        }

        .form-error {
            margin-top: 0.5rem;
            color: #ff4d4d;
        }

        .form-link {
            color: #bbbbbb;
            text-decoration: underline;
            font-size: 0.875rem;
        }

        .form-link:hover {
            color: #ffffff;
        }

        .form-checkbox {
            background-color: #333333;
            border: 1px solid #4caf50;
            color: #4caf50;
            margin-right: 0.5rem;
        }

        .form-checkbox:focus {
            outline: none;
            border-color: #4caf50;
        }

        .form-button {
            margin-left: 1rem;
            padding: 0.75rem 1.5rem;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #388e3c;

        }
        .tick {
            color: #f0f0f0;
        }
    </style>

    <form method="POST" action="{{ route('login') }}" class="form-container">
        @csrf

        <div>
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" class="form-input" value="{{ old('email') }}" required autofocus autocomplete="username">
            <div class="form-error">@error('email') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" class="form-input" required autocomplete="current-password">
            <div class="form-error">@error('password') {{ $message }} @enderror</div>
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <span class="tick">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="form-link">{{ __('Forgot your password?') }}</a>
            @endif
            <button type="submit" class="form-button">{{ __('Log in') }}</button>
        </div>
    </form>
</x-guest-layout>
