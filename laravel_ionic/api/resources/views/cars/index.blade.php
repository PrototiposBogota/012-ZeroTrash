@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Capacidad</th>
                <th>Localidad</th>
                <th>Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $post)
                <tr>
                    <td>{{$post['description']}}</td>
                    <td>{{$post['mark']}}</td>
                    <td>{{$post['capacity']}}</td>
                    <td>{{$post['id_locality']}}</td>
                    <td>{{$post['id_user']}}</td>
                    <td><a href="{{route('cars.edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('cars.destroy', $post['id'])}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ route('cars.create') }}" class="btn btn-info redon" role="button"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection
