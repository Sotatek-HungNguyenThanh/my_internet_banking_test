@extends('auth.home')

@section('title')
    Sign up
@endsection

@section('content')
    <div class="main-content">
        <form role="form" class="form-login" method="post" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <img src="{{ asset('/images/home.png') }}" alt="">
            <h4>SIGN UP</h4>
            <div>
                <input type="text" class="input-form form-control" name="name" placeholder="NAME" value="{{ old('name') }}"  value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="error-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <input type="email" class="input-form form-control" name="email" placeholder="EMAIL" value="{{ old('email') }}"  value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="error-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="password" class='input-form form-control' name="password" placeholder="PASSWORD"  value="{{ old('password') }}" required>
                @if ($errors->has('password'))
                    <span class="error-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <input type="number" class='input-form form-control telephone' name="telephone" placeholder="TEL/H.P"  value="{{ old('telephone') }}" required>
                @if ($errors->has('telephone'))
                    <span class="error-block">
                        <strong>{{ $errors->first('telephone') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <button class="btn-login btn">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
