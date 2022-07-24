@extends('layouts.app')

@section('content')
<div class="container">
<div >
    
       <h1 class="display-4 mb-5">Rosticeria Juquilita</h1>
    </div>
    <div class="row" >
        <div class="col-sm-6" >
          <div class="card">
            <div class="card-body">
                <div class="col-lg-12 hero-left">
                     <h2> El verdadero sabor de Tequila, Veracruz! Le presenta el paquete: <h3> {{ $all->nombre }}</h3>
                    </h2>
                    <div class="mb-2">
                        </a>
                        <div>    
                         
                            <img  class="img-fluid" src="{{ asset('../storage/app/'.$all->image.'') }}" alt="no hay imagen ">
                        
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    
                </div>  


            </div>
          </div>
        </div>
        <div class="col-sm-6" >
          <div class="card">
            <div class="card-body" >
                <div class="col-lg-12 hero-left">
                   
                    <h3>{{ $all->descripcion }}</h3>


                    <!--action="{{ url('/root/pedido/all') }}" method="POST" enctype="multipart/form-data"-->
                    <form >
                    @csrf

                    

                    <div class="form-group col-md-12">
                        
                         <h4>¿Cuantos paquetes va a llevar? </h4>

                        
                        <input  class="form-control" type="number" name="cantidad" id="cantidad" value=1 pattern="^[0-9]" title='Only Number' min="1" step="1" max="{{ $all->cantidad }}" onChange="multiplicar();"> 
                        
                    </div>

                    
                    
                    <div class="form-group col-md-12">
                        <label ><h4>Cantidad a pagar $:</h4></label>
                        <input  class="form-control" type="text" value="{{ $all->precio }}" name="totalPago" id="totalPago">
                    </div>


                    <div class="form-group col-md-12">

                                <label for="id_categoria">Seleccione la forma de pago</label>
                                <select name="forma_pago" id="forma_pago" class="form-control" required autofocus>
                                    <option value="6" selected>Elija una opción</option>
                                  
                                    <option value="0" >Efectivo (Realice el pago en el momento que recibe el producto)</option>
                                    <option value="1" >Transferencia </option>
                                </select>

                    </div>


                    <!--<a class="btn btn-primary btn-shadow btn-lg" href="" role="button">Confirmar compra</a>-->
                    


                    </form>
                    
                    <div class="form-group col-md-12">
                    <!--<button class="btn btn-success" data-toggle="modal" data-target="ventanamodal"> Cantidad a pagar</button>-->
                         <button class="btn btn-primary btn-shadow btn-lg" onclick="abrirModal()">Proceder al pago</button>
                    </div>

                    
                    
                </div>  
            </div>
          </div>
        </div>
    </div>


    <div class="container">
        <div class="row d-flex align-items-center">
           
            <div class="col-lg-6 hero-right">
                <div class="owl-carousel owl-theme hero-carousel">
                   
    
                  
                </div>
            </div>
        </div>
    </div>


    <!--Modal Efectivo-->
    <div class="modal fade" id="addModalEfectivo" tabindex="-1" role="dialog" aria-labelledby="tituloventana" aria-hidden="true">
                <div class="modal-dialog" style="padding-top: 90px" role="document">                    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="tituloventana"> Confirmar operación</h4>
                            <button class="close" data-dimiss="modal" aria-label="cerrar" onclick="closeModal('0')" >
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                




                        <!--action="{{ url('/root/pedido/all') }}" method="POST" enctype="multipart/form-data"-->
                    <form action="{{ url('/root/pedido/all') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="userId" id="userId" value="{{Auth::user()->id}}" class="d-none">
                        <input type="text" name="userNombre" id="userNombre" value="{{Auth::user()->name}} {{Auth::user()->f_surname}} {{Auth::user()->l_surname}}" class="d-none">

                        <input type="text" name="id_paquete" id="id_paquete" value="{{ $all->id }}" class="d-none">
                        <input type="text" name="paqueteNombre" id="paqueteNombre" value="{{ $all->nombre }}" class="d-none">

                        <input type="text" name="status" id="status" value="0" class="d-none">
                        <input type="text" name="folio" id="folioEfectivo" value="" class="d-none">

                        <input type="text" name="precio" id="precio" value="{{ $all->precio }}" class="d-none">
                        <input type="text" name="forma_pago" id="forma_pagoEfectivo" class="d-none">
                    

                    <div class="form-group col-md-12 d-none">
                        
                         <h4>¿Cuantos paquetes va a llevar? </h4>

                        <input  class="form-control" type="number" name="cantidad" id="cantidadEfectivo" value=1 pattern="^[0-9]" title='Only Number' min="1" step="1" max="{{ $all->cantidad }}" > 
                        
                    </div>

                    
                    
                    <div class="form-group col-md-12 d-none">
                        <label ><h4>Cantidad a pagar $:</h4></label>
                        <input  class="form-control" type="text" value="{{ $all->precio }}" name="totalPago" id="totalPago">
                    </div>


                    


                    <!--<a class="btn btn-primary btn-shadow btn-lg" href="" role="button">Confirmar compra</a>-->
                    
                                <div class="alert alert-success">
                                   <h5> Usted deberá acudir a nuestro local para realizar el pago y asi mismo entregarle el producto.  
                        
                                   </h5>
                                </div>

                                <div class="alert alert-warning">
                                   <h5> ¿Todos los datos estan correctos? ¿Desea continuar? 
                        
                                   </h5>
                                </div>


                                <div class="modal-footer">
                                    
                                        <button class="btn btn-success" >
                                        Confirmar compra
                                        </button>
                                </div>

                    </form>


                       
                                            
                        </div>
                         
                                     <button onclick="closeModal('0')" class="btn btn-primary btn-shadow btn-lg"  data-dimiss="modal">
                                        Cancelar
                                    </button>
                        </div>
                        </div>
                    </div>
                </div>               
</div>
    <!--End Modal Efectivo-->

    <!--Modal Transferencia-->
    <div class="modal fade" id="addModalTransferencia" tabindex="-1" role="dialog" aria-labelledby="tituloventana" aria-hidden="true">
                <div class="modal-dialog" style="padding-top: 90px" role="document">                    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="tituloventana"> Confirmar operación</h4>
                            <button class="close" data-dimiss="modal" aria-label="cerrar" onclick="closeModal('1')" >
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                        
                        <!--action="{{ url('/root/pedido/all') }}" method="POST" enctype="multipart/form-data"-->
                    <form action="{{ url('/root/pedido/all') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="userId" id="userId" value="{{Auth::user()->id}}" class="d-none">
                        <input type="text" name="userNombre" id="userNombre" value="{{Auth::user()->name}} {{Auth::user()->f_surname}} {{Auth::user()->l_surname}}" class="d-none">

                        <input type="text" name="id_paquete" id="id_paquete" value="{{ $all->id }}" class="d-none">
                        <input type="text" name="paqueteNombre" id="paqueteNombre" value="{{ $all->nombre }}" class="d-none">

                        <input type="text" name="status" id="status" value="0" class="d-none">
                        <input type="text" name="folio" id="folioTransferencia" value="" class="d-none">

                        <input type="text" name="precio" id="precio" value="{{ $all->precio }}" class="d-none">
                        <input type="text" name="forma_pago" id="forma_pagoTransferencia" class="d-none">
                    

                    <div class="form-group col-md-12 d-none">
                        
                         <h4>¿Cuantos paquetes va a llevar? </h4>

                        <input  class="form-control" type="number" name="cantidad" id="cantidadTransferencia" value=1 pattern="^[0-9]" title='Only Number' min="1" step="1" max="{{ $all->cantidad }}" > 
                        
                    </div>

                    
                    
                    <div class="form-group col-md-12 d-none">
                        <label ><h4>Cantidad a pagar $:</h4></label>
                        <input  class="form-control" type="text" value="{{ $all->precio }}" name="totalPago" id="totalPago">
                    </div>


                    <div class="form-group col-md-12">
                        <label for="">Realice la transferencia y suba la captura de pantalla como evidencia de pago.</label>
                                            <input type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" id="imagen" name="imagen" accept="image/*" value="{{ old('imagen') }}" required autofocus>
                                        @if ($errors->has('imagen'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                        @endif   
                                     </div>


                    <!--<a class="btn btn-primary btn-shadow btn-lg" href="" role="button">Confirmar compra</a>-->
                    

                                <div class="alert alert-warning">
                                   <h5> ¿Todos los datos estan correctos? ¿Desea continuar? 
                        
                                   </h5>
                                </div>


                                <div class="modal-footer">
                                    
                                <button class="btn btn-success" >
                                Confirmar compra
                                </button>
                                </div>
                    </form>
                                
                                
                                
                    
                        
                                            
                        </div>

                                    <button onclick="closeModal('1')" class="btn btn-primary btn-shadow btn-lg"  data-dimiss="modal">
                                        Cancelar
                                    </button>
                        </div>
                        </div>
                    </div>
                </div>               
</div>
    <!--End Modal Transferencia-->
    

       <!--Modal Warning-->
       <div class="modal fade" id="addModalWarning" tabindex="-1" role="dialog" aria-labelledby="tituloventana" aria-hidden="true">
                <div class="modal-dialog" style="padding-top: 90px" role="document">                    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="tituloventana"> Advertencia</h4>
                            <button class="close" data-dimiss="modal" aria-label="cerrar" >
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                
                                
                                <div class="alert alert-warning">
                                   <h5> Para continuar debe de seleccionar una forma de pago 
                        
                                   </h5>
                                </div>
                        </div>
                        <div class="modal-footer">
                            
                        <button onclick="closeModal('6')" class="btn btn-success" type="button">
                        Aceptar
                        </button>
                        </div>
                                            
                        </div>
                        </div>
                        </div>
                    </div>
                </div>               
</div>
    <!--End Modal Warning-->

    <!--
        Multiplicacion
    -->
    <script>

            const selectElement = document.getElementById("forma_pago");

            selectElement.addEventListener('change', (event) => {

                formaPago= document.getElementById("forma_pago").value;

                document.getElementById("forma_pagoTransferencia").value = formaPago;
                document.getElementById("forma_pagoEfectivo").value = formaPago;
            });




        function multiplicar(){
            
            cantidad = document.getElementById("cantidad").value;
            
            precioUnitario = {{ $all->precio }};
            total = cantidad * precioUnitario;
            
            document.getElementById("totalPago").value = total;

            document.getElementById("cantidadEfectivo").value = cantidad;

            document.getElementById("cantidadTransferencia").value = cantidad;

            
            

            

            
            }
            
            
            var aleatorio='';
            for(var i=0;i<6;i++){
                aleatorio+= Math.round(Math.random()*9);
            }
            
            const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let result1= '';
            const charactersLength = characters.length;
            for ( let i = 0; i < 2; i++ ) {
                result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            
                
                document.getElementById("folioEfectivo").value = result1+'-'+aleatorio;
                document.getElementById("folioTransferencia").value = result1+'-'+aleatorio;
            



               function abrirModal(){

                //document.getElementById("totalPagoEfectivo").value = r;

                opcion = document.getElementById("forma_pago").value;

                console.log(opcion);
                switch(opcion){
                    case '0':
                        $('#addModalEfectivo').modal('show');

                        break;

                        case '1':
                            $('#addModalTransferencia').modal('show');
                            break;
                            
                            case '6':
                                $('#addModalWarning').modal('show');
                                
                                break;
                }
                
                }

                function closeModal(opcion){

console.log(opcion);
                    switch(opcion){
                    case '0':
                        $('#addModalEfectivo').modal('hide');

                        break;

                        case '1':
                            $('#addModalTransferencia').modal('hide');
                            break;
                            
                            case '6':
                                
                                $('#addModalWarning').modal('hide');
                                
                                break;
                }

                }
        </script>
</div>

@endsection
