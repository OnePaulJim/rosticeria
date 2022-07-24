@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Editar Producto') }}</div>

                <div class="card-body">
                    
                    <form  action="{{ url('/root/producto/all/'.encrypt($all->id).'' ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="nombre" name="nombre" maxlength="60" value="{{ $all->nombre }}" placeholder="Ingrese un nombre" required autofocus>
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                           

                            <div class="form-group col-md-6">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control" required autofocus>
                                    <option value="{{$all->tipo }}" selected>{{ $all->tipo }}</option>
                                    <option value="Extra" >Extra</option>
                                    <option value="Complemento">Complemento</option>
                                    
                                </select>
                            </div>


                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" id="cantidad" step="0.001" name="cantidad" maxlength="20" value="{{  $all->cantidad }}" placeholder="Ingrese la cantidad" required autofocus>
                                @if ($errors->has('cantidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                            <div class="form-group col-md-6">
                                <label for="id_categoria">Categoría</label>
                                <select name="id_categoria" id="id_categoria" class="form-control" required autofocus>
                                    <option value="{{ $all->categoria->id }}" selected>{{ $all->categoria->nombre }}</option>
                                    @foreach($all2 as $info)
                                    <option value="{{$info->id}}">{{$info->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>

                        
                        
                        <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="precio">Precio</label>
                                    <input type="number" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" step="0.001" id="precio" name="precio" maxlength="20" value="{{$all->precio  }}" placeholder="Ingrese el precio" required autofocus>
                                    @if ($errors->has('precio'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('precio') }}</strong>
                                        </span>
                                    @endif
                                </div>

                               
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


@endsection
