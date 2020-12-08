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
               ">{{ __('Forgot your password?')}}</p>

            <form action="{{ route('password.email') }}" method="post" >
              <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

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
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                    </div>
                    <div class="input-group mb-3">
                        <a href="{{route('login')}}" class="btn btn-info btn-block">{{ __('Go Back') }}</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
