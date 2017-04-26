@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('front.user.post_login') }}">
                {{ csrf_field() }}
                <div class="ui two column middle aligned very relaxed stackable grid">
                    <div class="column">
                        <div class="ui form">
                            <div class="field">
                                <label>Email</label>
                                <div class="ui left icon input">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    <i class="mail icon"></i>
                                </div>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <div class="ui left icon input">
                                    <input id="password" type="password" name="password" required>
                                    <i class="lock icon"></i>
                                </div>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="inline field">
                                <div class="ui checkbox checked">
                                    <input type="checkbox" name="remember" class="hidden"{{ old('remember') ? 'checked' : '' }}>
                                    <label>Remember Me</label>
                                </div>
                                <div class="ui">
                                    <a class="btn btn-link" href="{{ e('fsf') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                            <button type="submit" class="ui blue submit button">Login</button>
                        </div>
                    </div>
                    <div class="ui vertical divider">
                        Or
                    </div>
                    <div class="center aligned column">
                        <a href="/register" class="ui big green labeled icon button">
                            <i class="signup icon"></i>
                            Sign Up
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection