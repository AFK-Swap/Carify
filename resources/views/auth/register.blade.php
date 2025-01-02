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
            margin-top: 0.25rem;
            padding: 0.5rem;
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #4caf50;
            border-radius: 4px;
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

        .form-button {
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #388e3c;
        }
    </style>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" class="form-input" value="{{ old('name') }}" required autofocus autocomplete="name">
            <div class="form-error">@error('name') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" class="form-input" value="{{ old('email') }}" required autocomplete="username">
            <div class="form-error">@error('email') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input id="phone" type="phone" name="phone" class="form-input" value="{{ old('phone') }}" required autocomplete="username">
            <div class="form-error">@error('phone') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input id="address" type="text" name="address" class="form-input" value="{{ old('address') }}" required autocomplete="username">
            <div class="form-error">@error('address') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" class="form-input" required autocomplete="new-password">
            <div class="form-error">@error('password') {{ $message }} @enderror</div>
        </div>

        <div class="mt-4">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required autocomplete="new-password">
            <div class="form-error">@error('password_confirmation') {{ $message }} @enderror</div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="form-link">{{ __('Already registered?') }}</a>
            <button type="submit" class="form-button">{{ __('Register') }}</button>
        </div>
    </form>
</x-guest-layout>
