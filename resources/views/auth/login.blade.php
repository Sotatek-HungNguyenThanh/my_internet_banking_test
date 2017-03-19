@extends('auth.home')

@section('title')
    Sign in
@endsection

@section('content')
    <div class="main-content">
        <form class="form-login" role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
            {{ csrf_field() }}
            <img src="{{ asset('/images/home.png') }}" alt="">
            <h4>SIGN IN</h4>
            <div>
                <input type="email" class="input-form form-control" name="email" placeholder="ID-EMAIL" autocomplete="off"
                value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="error-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="password" class='input-form form-control' name="password" placeholder="PASSWORD" autocomplete="off" 
                value="{{ old('password') }}" required>
                @if ($errors->has('password'))
                    <span class="error-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <button class="btn-login btn" href="">LOGIN</button>
            </div>
        </form>
    </div>
@endsection
