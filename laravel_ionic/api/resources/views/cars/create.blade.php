@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novedades</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('cars.store') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="novelty" class="col-md-4 control-label">Descripcion del Carro</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Ingrese la descripcion del Carro" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mark') ? ' has-error' : '' }}">
                                <label for="mark" class="col-md-4 control-label">Marca del Carro</label>

                                <div class="col-md-6">
                                    <input id="mark" type="text" class="form-control" name="mark" value="{{ old('mark') }}" placeholder="Ingrese la Marca" required autofocus>

                                    @if ($errors->has('mark'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mark') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('capacity') ? ' has-error' : '' }}">
                                <label for="capacity" class="col-md-4 control-label">Capacidad del Carro</label>

                                <div class="col-md-6">
                                    <input id="capacity" type="text" class="form-control" name="capacity" value="{{ old('capacity') }}" placeholder="Ingrese la Capacidad del Carro" required autofocus>

                                    @if ($errors->has('capacity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('capacity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_locality') ? ' has-error' : '' }}">
                                <label for="id_locality" class="col-md-4 control-label">Carro</label>

                                <div class="col-md-6">
                                    <select id="id_locality" type="text" class="form-control" name="id_locality" required autofocus>
                                        @foreach($locality as $values)
                                            <option value="{{$values->id}}">{{$values->description}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('id_locality'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_locality') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('id_user') ? ' has-error' : '' }}">
                                <label for="id_user" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-6">
                                    <select id="id_user" type="text" class="form-control" name="id_user" required autofocus>
                                        @foreach($users as $values)
                                            <option value="{{$values->id}}">{{$values->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('id_user'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_user') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
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

