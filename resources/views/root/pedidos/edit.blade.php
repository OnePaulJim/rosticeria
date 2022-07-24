@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Entregar pedido') }}</div>

                <div class="card-body">
                    
                    <form  action="{{ url('/root/pedido/all/'.encrypt($all->id).'' ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="" style="font-family: Arial, Bold">Folio:</label>
                                <label for="nombre" style="font-family: Arial, Bold; color: #e22104;">{{ $all->folio }}</label>
                                
                            </div>

                            <div class="form-group col-md-6">
                            <label for="" style="font-family: Arial, Bold">Cliente:</label>
                                <label for="descripcion">{{ $all->user->name }} {{$all->user->f_surname}} {{$all->user->l_surname}}</label>
                                
                            </div>                           

                        </div>

                        

                        
                        
                        <div class="row">

                            <div class="form-group col-md-4">
                            <label for="" style="font-family: Arial, Bold">Paquete:</label>
                                <label >{{ $all->paquete->nombre }} </label>
                                <label for="" style="font-family: Arial, Bold">Descripción:</label>
                                <label >{{ $all->paquete->descripcion }} </label>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="" style="font-family: Arial, Bold">Cantidad:</label>
                                <label >{{ $all->cantidad }}</label>
                                
                            </div>

                            <div class="form-group col-md-4">
                            <label for="" style="font-family: Arial, Bold">Total $:</label>
                                <label >{{ $all->cantidad * $all->paquete->precio }}</label>
                                
                            </div>
                               

                               
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                            <label for="" style="font-family: Arial, Bold">Fecha de expedición:</label>
                                <label > {{ $all->created_at }}</label>
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="" style="font-family: Arial, Bold">Estado:</label>
                                <label >
                                        <h3 

                                            @if ($all->status=='0')
                                            style='display:inline; color: #e22104; font-family: Arial, Bold'
                                            @else
                                            style='display:inline; color: green'

                                            @endif
                                            >
                                            @if ($all->status=='0')
                                            Por entregar
                                            @else
                                            Entregado
                                            @endif
                                        </h3>
                                </label>
                                
                            </div>
                            
                        </div>


                        <div class="row">
                                                                                   
                            <div class="d-none form-group col-md-6">
                                <label for="status">Entregar pedido</label>
                                <select  name="status" id="status" class="form-control" required autofocus>
                                    <option value="1" selected>1</option>
                                    
                                </select>
                            </div>
                            
                        </div>

                        
                        <div class="row">

                             <div class="form-group col-md-6">
                             
                                            @if ($all->forma_pago=='0')
                                            <img class="form-group col-md-12" src="{{ asset('img/efectivo.png') }}" alt="">
                                            @else
                                            <img class="form-group col-md-12" src="{{ asset('../storage/app/'.$all->imagen.'') }}" alt="No se detectó ninguna imagen">
                                            
                                            @endif
                             
                            
                                
                            </div>


                            
                            <div class="form-group col-md-6" align="right">
                                            
                                            @if($all->status=='0')
                                            <a href="{{ url('/root/pedido/all') }}" class="btn btn-primary btn-shadow btn-lg" role="button">Cancelar</a>
                                            <button class="btn btn-success">Confirmar entrega</button>
                                            @else
                                            <a href="{{ url('/root/pedido/all') }}" class="btn btn-primary btn-shadow btn-lg" role="button">Cerrar</a>
                                            @endif
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')


@endsection
