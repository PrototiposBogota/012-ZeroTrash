@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post</th>
            </tr>
            </thead>
            <tbody>
            @foreach($novelty as $post)
                <tr>
                    <td>{{$post['id_novelty_type']}}</td>
                    <td>{{$post['novelty']}}</td>
                    <td>{{$post['id_user']}}</td>
                    <td>{{$post['id_car']}}</td>
                    <td><a href="{{route('novelty.edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('novelty.destroy', $post['id'])}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ route('novelty.create') }}" class="btn btn-info redon" role="button"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@endsection
