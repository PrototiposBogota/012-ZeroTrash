@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Zero</b>Trash</a>
                <a href="{{ url('/home') }}"><img src="{{asset('/img/logo2.png')}}" width="75" height="75 "></a>
            </div>

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

            <div class="register-box-body">
                <p class="login-box-msg">Fortmulario de registro</p>

                <register-form></register-form>


                <br>
                <a href="{{ url('/login') }}" class="text-center"> Volver para iniciar session</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
