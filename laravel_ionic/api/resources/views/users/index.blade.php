@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $post)
                <tr>
                    <td>{{$post['name']}}</td>
                    <td>{{$post['email']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
