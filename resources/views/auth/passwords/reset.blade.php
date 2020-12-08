@extends('layouts.auth')
@section('content')

<div class="login-box" style="margin-top: -5%;">

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg" style="
               font-weight: bold;
               font-size: large;
               margin-top: 2%;color:#005cbf
               ">{{ __('Reset Password') }}</p>

            <form action="{{ route('password.update') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="off" autofocus placeholder="{{ __('E-Mail Address') }}">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="off" autofocus placeholder="{{ __('Password') }}">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation"  required autocomplete="off" autofocus placeholder="{{ __('Confirm Password') }}">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                    @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                 <div class="input-group mb-3">
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block" style="color:red">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Reset Password') }}</button>
                    </div>
                    <div class="input-group mb-3">
                        <a href="{{route('login')}}" class="btn btn-info btn-block">{{ __('Sign In') }}</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
