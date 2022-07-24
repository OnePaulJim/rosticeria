@extends('layouts.app')

@section('content')
<!--<div class="container" >-->

<div class="" >
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pedidos</li>
              </ol>
            </nav>

            <div class="card">
                <div class="card-header">{{ __('Pedidos') }}</div>
                <!--<a href="{{ url('/root/pedido/all/create') }}" class="btn btn-success">Añadir</a>-->
                <!--<input type="text" name="buscar" id="buscar-usuario" >-->

                <form action="">
                    <div class="input-group my-2">
                    <div class="form-outline">
                        <input type="search" name="txtBusqueda" class="form-control" placeholder="Buscar folio"/>
                    </div>
                    <button  class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>

                </form>


                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('status') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    {{ $all->links()}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Folio</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Paquete</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio Total</th>
                                
                                <th scope="col">Fecha de pedido</th>
                                <th scope="col">Forma de pago</th>
                                
                                <th scope="col">status</th>
                                <th scope="col">Acción 1</th>
                                <th scope="col">Acción 2</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-usuarios">
                            <!-- {{$i = 1}} -->
                            @foreach($all as $info)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td style="color: #e22104; font-family: Arial, Bold">{{ $info->folio}}</td>
                                <td>{{ $info->user->name }} {{$info->user->f_surname}} {{$info->user->l_surname}}</td>
                                <td>{{ $info->paquete->nombre }}</td>
                                <td>{{ $info->cantidad }}</td>
                                <td>$ {{ $info->precio }}</td>

                                <td>{{ $info->created_at}}</td>

                                <td>
                                @if ($info->forma_pago=='0')
                                Efectivo
                                @else
                                Transferencia
                                @endif
                                </td>
                                
                                <td

                                @if ($info->status=='0')
                                style='color: #e22104; font-family: Arial, Bold'
                                @else
                                style='color: green; font-family: Arial, Bold'
                                
                                @endif
                                >
                                @if ($info->status=='0')
                                Por entregar
                                @else
                                Entregado
                                @endif
                                </td>

                                

                                <td> 
                                @if ($info->status=='0')
                                <a href="{{ url('/root/pedido/all/'.encrypt($info->id).'/edit') }}" class="btn btn-warning" role="button">Entregar</a>
                                @else
                                <a href="{{ url('/root/pedido/all/'.encrypt($info->id).'/edit') }}" class="btn btn-warning" style="background-color:green" role="button">Detalles</a>
                                @endif
                                     
                                </td>
                                <td>
                                    <form action="{{ url('/root/pedido/all/'.encrypt($info->id)) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $("#buscar-usuario").keyup(function(){
                _this = this;
                 // Show only matching TR, hide rest of them
                 $.each($("#tabla-usuarios tr"), function() {
                 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                 $(this).hide();
                 else
                 $(this).show();
                 });
                 });
    });
</script>
@endsection
