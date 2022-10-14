@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('producto.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo producto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Talla</th>
										<th>Marca</th>
										<th>Observaciones</th>
										<th>Cantidad Inventario</th>
										<th>Fecha de embargue</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->talla }}</td>
											<td>{{ $producto->marca->nombre }}</td>
											<td>{{ $producto->observaciones }}</td>
											<td>{{ $producto->cantidad_inventario }}</td>
											<td>{{ $producto->fecha_de_embarque }}</td>

                                            

                                            <td>
                                                <form action="{{ route('producto.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('producto.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('producto.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
