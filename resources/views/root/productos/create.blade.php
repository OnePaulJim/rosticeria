@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Crear Producto') }}</div>

                <div class="card-body">
                    <form action="{{ url('/root/producto/all') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="nombre" name="nombre" maxlength="60" value="{{ old('nombre') }}" placeholder="Ingrese un nombre" required autofocus>
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--
                            <div class="form-group col-md-4">
                                <label for="apellido_paterno">Categoría</label>
                                <input type="text" class="form-control{{ $errors->has('apellido_paterno') ? ' is-invalid' : '' }}" id="apellido_paterno" name="apellido_paterno" maxlength="45" value="{{ old('apellido_paterno') }}" placeholder="Ingrese un apellido paterno" required autofocus>
                                @if ($errors->has('apellido_paterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido_paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
-->

                            <div class="form-group col-md-6">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control" required autofocus>
                                    <option value="" selected>Elija una opción</option>
                                    <option value="Extra" >Extra</option>
                                    <option value="Complemento">Complemento</option>
                                    
                                </select>
                            </div>


                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" id="cantidad" step="0.001" name="cantidad" maxlength="20" value="{{ old('cantidad') }}" placeholder="Ingrese la cantidad" required autofocus>
                                @if ($errors->has('cantidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                            <div class="form-group col-md-6">
                                <label for="id_categoria">Categoría</label>
                                <select name="id_categoria" id="id_categoria" class="form-control" required autofocus>
                                    <option value="" selected>Elija una opción</option>
                                    @foreach($all as $info)
                                    
                                        <!--@if($info->name!="Estudiante")-->
                                            <option value="{{$info->id}}">{{$info->nombre}}</option>
                                        <!--@endif-->
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>

                        <!--
                            <div class="form-group col-md-6">
                                <label for="email">Precio</label>
                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" maxlength="100" value="{{ old('email') }}" placeholder="Ingrese un email" required autofocus autocomplete="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>-->
                        
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

                               <!--
                            <div class="form-group col-md-6">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" maxlength="255" value="{{ old('password') }}" placeholder="Ingrese un contraseña" required autofocus autocomplete="new-password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password-confirm">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" maxlength="255" placeholder="Confirmar contraseña" required autofocus autocomplete="new-password">
                            </div>
                           -->
                        </div>

                        

                        
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="imagen">Imagen</label>
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
