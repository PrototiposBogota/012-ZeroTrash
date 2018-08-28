@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.create') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                           <!-- <div class="form-group row">
                                <label for="type_identification" class="col-md-4 col-form-label text-md-right">Tipo de Identificacion</label>

                                <div class="col-md-6">
                                    <select id="type_identification" type="text" class="form-control" name="type_identification" required autofocus>
                                        @foreach($documentType as $values)
                                            <option value="{{$values->id}}">{{$values->description}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type_identification'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type_identification') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="identification" class="col-md-4 col-form-label text-md-right">Identificacion</label>

                                <div class="col-md-6">
                                    <input id="identification" type="text" class="form-control{{ $errors->has('identification') ? ' is-invalid' : '' }}" name="identification" value="{{ old('identification') }}" required autofocus>

                                    @if ($errors->has('identification'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identification') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="genary" class="col-md-4 col-form-label text-md-right">Genero</label>

                                <div class="col-md-6">
                                    <select id="genary" type="text" class="form-control" name="genary" required autofocus>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                    @if ($errors->has('genary'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rol_id" class="col-md-4 col-form-label text-md-right">Rol</label>

                                <div class="col-md-6">
                                    <select id="rol_id" type="text" class="form-control" name="rol_id" required autofocus>
                                        @foreach($rol as $values)
                                            <option value="{{$values->id}}">{{$values->description}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('rol_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rol_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_city" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <select id="id_city" type="text" class="form-control" name="id_city" required autofocus>
                                        @foreach($city as $values)
                                            <option value="{{$values->id}}">{{$values->description}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

