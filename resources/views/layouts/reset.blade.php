


@extends('layouts.app')

@section('content')
<div>
        <h2>Reset Password</h2>

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div>
                <button type="submit">Reset Password</button>
            </div>
        </form>
    </div>
    @endsection