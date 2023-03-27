@extends('layouts.auth-master')
<div class='login'>
    <div class="loginbox">
        <h2 class="login-title">Log in</h2>
        @include('layouts.partials.messages')
        <form class="login-form" method="post" action="{{ route('login.perform') }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div>
                 @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
                <label for="email">Email </label>
                <input id="email" type="email" placeholder="me@example.com" name="username" required />
            </div>

            <div>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
                <label for="password">Password </label>
                <input id="password" type="password" placeholder="password" name="password" required />
            </div>
            <button class="btn btn--form" type="submit" value="Log in">
                Log in
            </button>
        </form>
    </div>
            @include('auth.partials.copy')
</div>

   
