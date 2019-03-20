@extends('layouts.app')

@section('content')
    <div class='row'>
        <div class="col">
            <h1>Edit Report {{$reporte->idr}}</h1>
        </div>
    </div>
    <div class='row'>
    </div>
       <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Reporte') }}</div>                       
                    <div class="card-body">
                    <form method="POST" action="/reporte/{{$reporte->idr}}">
                                @csrf
                                @method('put')   
                                <div class="form-group row">
                                </div>
                                <div class="form-group row">
                                    <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
            
                                    <div class="col-md-6">
                                        <input id="desc" type="desc" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{ old('desc') }}" required>
            
                                        @if ($errors->has('desc'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('desc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Monto') }}</label>
                                    <div class="col-md-6">
                                        <input id="amount" type="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" value="{{ old('amount') }}" required>
                                        @if ($errors->has('amount'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                        <a class='btn btn-secondary' href="/reporte">Back</a>  
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
@endsection