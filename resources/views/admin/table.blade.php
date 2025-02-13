@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 70px;">
    <h2 style="text-align: center;">Productos registrados</h2>
    <button type="button" class="btn btn-success pull-left" onclick="window.location='{{ url("products/create") }}'">Agregar producto</button>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Visible en la tienda</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach($products as $pro)
                <tr>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->slug }}</td>
                    <td>{{ $pro->description }}</td>
                    <td>{{ $pro->price }}</td>
                    <td><img src="/images/{{ $pro->image_path }}" class="card-img-top mx-auto" style="height: 40px; width: 40px;display: block;" alt="{{ $pro->image_path }}"></td>
                    <td>{{ $pro->status ? 'S' : 'N' }}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{ url('products/edit/'.$pro->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            {!! Form::open(['action' => ['ProductController@destroy', $pro->id], 'method' => 'POST']) !!}
                            {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Desea eliminar el registro?')"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
</div>

@endsection