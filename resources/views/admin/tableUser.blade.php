@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 70px;">
    <h2 style="text-align: center;">Usuarios registrados</h2>
    <button type="button" class="btn btn-success pull-left" onclick="window.location='{{ url("/users/create") }}'">Agregar usuario</button>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Registrado desde</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>{{ $user->userData ? $user->userData->created_at : 'No existen datos' }}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            {!! Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST']) !!}
                            {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Desea eliminar el registro?')"]) !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>

@endsection