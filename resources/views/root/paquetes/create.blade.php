@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Crear Paquete') }}</div>

                <div class="card-body">
                    <form action="{{ url('/root/paquete/all') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="nombre" name="nombre" maxlength="80" value="{{ old('nombre') }}" placeholder="Ingrese un nombre" required autofocus>
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="descripcion" name="descripcion" maxlength="150" value="{{ old('descripcion') }}" placeholder="Ingrese una descripción"  autofocus>
                                @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            


                        </div>

                        <div class="row">
                            
                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" step="0.001" id="precio" name="precio" maxlength="20" value="{{ old('precio') }}" placeholder="Ingrese el precio" required autofocus>
                                @if ($errors->has('precio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" id="cantidad" step="0.001" name="cantidad" maxlength="20" value="{{ old('cantidad') }}" placeholder="Ingrese la cantidad" required autofocus>
                                @if ($errors->has('cantidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>

                        <div class="row">
                            <!--

                                    <label for="">Seleccionar imagen</label>
                                    <div class="form-group col-md-8">-->

                        

                        
                               

                                            <!--class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" -->
                                            <!--se le  quitó la clase al input file la linea anterior que está comentada-->
                                     <!--<input class="img-thumbnail" id="imagen" name="imagen" accept="image/*"  width="250px" type="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Logo_Grupo_Imagen_Multimedia.2016.png/368px-Logo_Grupo_Imagen_Multimedia.2016.png"  autofocus>
                                            

                                    </div>-->

                                    <div class="form-group col-md-6">
                                            <input type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" id="imagen" name="imagen" accept="image/*" value="{{ old('imagen') }}"  autofocus>
                                        @if ($errors->has('imagen'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                        @endif   
                                     </div>

                        </div>
                        
                       
              
                        
                        <div class="row">
                            <div class="form-group col-md-12" align="right">
                                <button class="btn btn-success">Guardar</button>
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
<script>
$( document ).ready(function() {
    $("#telefono").inputmask({"mask": "(+52) 999-999-99-99"});
    $("#email").inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,40}[.*{2,20}][.*{1,20}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            '*': {
            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
            cardinality: 1,
            casing: "lower"
            }
        }});
});
</script>

@endsection
