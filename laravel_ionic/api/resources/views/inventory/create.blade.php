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
                        <form class="form-horizontal" method="POST" action="{{ route('inventory.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('id_recycling_type') ? ' has-error' : '' }}">
                                <label for="id_novelty_type" class="col-md-4 control-label">Tipo Novedad</label>

                                <div class="col-md-6">
                                    <select id="id_recycling_type" type="text" class="form-control" name="id_recycling_type" required autofocus>
                                        @foreach($recyclingType as $values)
                                            <option value="{{$values->id}}">{{$values->description}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('id_recycling_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_recycling_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                                <label for="cantidad" class="col-md-4 control-label">Descripcion Novedad</label>

                                <div class="col-md-6">
                                    <input id="cantidad" type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}" placeholder="Ingrese la descripcion de la novedad" required autofocus>

                                    @if ($errors->has('cantidad'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
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

