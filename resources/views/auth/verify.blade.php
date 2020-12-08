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
               ">{{ __('Verify Your Email Address') }}</p>


            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form action="{{ route('verification.resend') }}" method="post" >
                @csrf
                <div class="row">
                 <div class="input-group mb-3">
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block" style="color:red">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('click here to request another') }}<</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
