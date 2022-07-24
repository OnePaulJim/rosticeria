@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Crear Categoria') }}</div>

                <div class="card-body">
                    <form action="{{ url('/root/categoria/all') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" id="Nombre" name="Nombre" maxlength="60" value="{{ old('Nombre') }}" placeholder="Ingrese un nombre" required autofocus>
                                @if ($errors->has('Nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                         </div>
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Descripcion">Descripcion</label>
                                <input type="text" class="form-control{{ $errors->has('Descripcion') ? ' is-invalid' : '' }}" id="Descripcion" name="Descripcion" maxlength="60" value="{{ old('Descripcion') }}" placeholder="Ingrese descripcion" required autofocus>
                                @if ($errors->has('Descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Descripcion') }}</strong>
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