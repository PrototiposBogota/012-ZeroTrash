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
                        <form class="form-horizontal" method="POST" action="{{route('novelty.update', $novelty->id)}}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('id_novelty_type') ? ' has-error' : '' }}">
                                <label for="id_novelty_type" class="col-md-4 control-label">Tipo Novedad</label>

                                <div class="col-md-6">
                                    <select id="id_novelty_type" type="text" class="form-control" name="id_novelty_type" required autofocus>
                                        <option value="{{$novelty->id_novelty_type}}">Hola</option>
                                    </select>

                                    @if ($errors->has('id_novelty_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_novelty_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('novelty') ? ' has-error' : '' }}">
                                <label for="novelty" class="col-md-4 control-label">Descripcion Novedad</label>

                                <div class="col-md-6">
                                    <input id="novelty" type="text" class="form-control" name="novelty" value="{{$novelty->novelty}}" placeholder="Ingrese la descripcion de la novedad" required autofocus>

                                    @if ($errors->has('novelty'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('novelty') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('id_user') ? ' has-error' : '' }}">
                                <label for="id_user" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-6">
                                    <select id="id_user" type="text" class="form-control" name="id_user" required autofocus>
                                        <option value="{{$novelty->id_user}}">User 1</option>
                                    </select>

                                    @if ($errors->has('id_user'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_user') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_car') ? ' has-error' : '' }}">
                                <label for="id_car" class="col-md-4 control-label">Carro</label>

                                <div class="col-md-6">
                                    <select id="id_car" type="text" class="form-control" name="id_car" required autofocus>
                                        <option value="{{$novelty->id_car}}">Toyota</option>
                                    </select>

                                    @if ($errors->has('id_car'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_car') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
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
