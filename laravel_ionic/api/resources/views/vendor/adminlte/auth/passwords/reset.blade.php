@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Cambiar Contraseña
@endsection

@section('content')

    <body class="login-page">

    <div id="app">
        <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Zero</b>Trash</a>
            <a href="{{ url('/home') }}"><img src="{{asset('/img/logo2.png')}}" width="75" height="75 "></a>
        </div><!-- /.login-logo -->

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
            <p class="login-box-msg">Recordar Contraseña</p>

            <reset-password-form token="{{ $token }}">></reset-password-form>

            <a href="{{ url('/login') }}">Volver para iniciar session</a><br>
            <a href="{{ url('/register') }}" class="text-center">Registrar</a>

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    </body>

@endsection
