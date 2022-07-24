@extends('layouts.app')

@section('content')
<!--<div class="container" >-->
    <div>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Paquetes</li>
              </ol>
            </nav>

            <div class="card">
                <div class="card-header">{{ __('Paquetes') }}</div>
                <a href="{{ url('/root/paquete/all/create') }}" class="btn btn-success">Añadir</a>
                <input type="text" name="buscar" id="buscar-usuario" placeholder="BUSCAR">

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('status') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                
                                <th scope="col">Fecha de creación</th>
                                <th scope="col">Acción 1</th>
                                <th scope="col">Acción 2</th>
                            </tr>
                        </thead>
                        <tbody id="tabla-usuarios">
                            <!-- {{$i = 1}} -->
                            @foreach($all as $info)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $info->nombre }}</td>
                                <td>
                                   
                                    <!--<div class="form-group col-md-6">-->
                                        <div>
                                        <img src="{{ asset('../storage/app/'.$info->image.'') }}"  heigth="150" width="150">
                                    </div>
                                    

                                </td>
                                <td>{{ $info->descripcion }}</td>
                                <td>{{ $info->cantidad }}</td>
                                <td>{{ $info->precio }}</td>
                                <td>{{ $info->created_at}}</td>
                                <td> 
                                    <a href="{{ url('/root/paquete/all/'.encrypt($info->id).'/edit') }}" class="btn btn-warning" role="button">Editar</a> 
                                </td>
                                <td>
                                    <form action="{{ url('/root/paquete/all/'.encrypt($info->id)) }}" method="POST">
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
