@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Zero</b>Trash</a>
                <a href="{{ url('/home') }}"><img src="{{asset('/img/logo2.png')}}" width="75" height="75 "></a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> Complete los campos para iniciar session </p>

        <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','') }}"></login-form>



        <a href="{{ url('/password/reset') }}">Recordar Contraseña</a><br>
        <a href="{{ url('/register') }}" class="text-center">Registrarse</a>

    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
</body>

@endsection
