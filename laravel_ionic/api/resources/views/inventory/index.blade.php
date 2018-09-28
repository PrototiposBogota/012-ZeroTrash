@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad(kilos)</th>
                <th>Usuario Creacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventory as $post)
                <tr>
                    <td>{{$post['description']}}</td>
                    <td>{{$post['cantidad']}}</td>
                    <td>{{$post['name']}}</td>
                    <td><a href="{{route('inventory.edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('inventory.destroy', $post['id'])}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ route('inventory.create') }}" class="btn btn-info redon" role="button"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection
