@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
@can('admin.tags.create')
<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}">Nueva etiqueta</a>
@endcan
<h1>Mostrar listado de etiquetas</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name}}</td>
                    @can('admin.tags.edit')
                    <td width="10px"> <a  class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit',$tag) }}">Editar</a></td>
                    @endcan
                    <td width="10px">
                       @can('admin.tags.destroy')
                       <form action="{{ route('admin.tags.destroy',$tag) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger  btn-sm" type="submit">Eliminar</button>
                    </form>
                       @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

