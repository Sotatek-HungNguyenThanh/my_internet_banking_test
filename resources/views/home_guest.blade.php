@extends('auth.home')
@section('title')
    Home
@endsection

@section('content')
    <div class="main-content">
        <p class="title">
            Welcome to My Internet Banking
        </p>
        <div class="img">
            <img src="{{ asset('/images/home.png') }}" alt="">
        </div>
        <div class="btn-register">
            <a class="btn" href="{{ url('/login') }}">SIGN IN</a>
            {{--<a class="btn" href="{{ url('/register') }}">SIGN UP</a>--}}
        </div>
    </div>
@endsection
