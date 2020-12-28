@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-8">
            <div class="panel-body">
                {!! Form::open(['action' => ['UserController@store'],'method' => 'POST']) !!}

                <div class="form-group">
                    {{Form::label('name', 'Nombre')}}
                    {{Form::text('name', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    {{Form::label('password', 'Contraseña')}}
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    {{Form::label('re_password', 'Confirmar contraseña')}}
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                </div>
                {{Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-sm"></div>
    </div>
</div>
@endsection