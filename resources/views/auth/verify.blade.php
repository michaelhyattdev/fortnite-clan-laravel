@extends('layout')

@section('title', 'Verify your account!')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <h2 class="text-center">{{ __('Verify Your Email Address') }}</h2>
        <p>
            @if(session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            If you did not receive the email please click the button below to request a new email.
            <br />
            <form class="d-flex justify-content-center mt-2" method="POST" action="{{ route('verification.resend') }}">
                @csrf
            
                <button type="submit" class="btn btn-primary">
                    {{ __('Request New Verification Email') }}
                </button>
            </form>
        </p>
    </div>
</div>

@endsection
