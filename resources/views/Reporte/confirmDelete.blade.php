@extends('layouts.app')

@section('content')
    <div class='row'>
        <div class="col">
            <h1>Borrar Reporte {{$report->idr}}</h1>
        </div>
    </div>
    <div class='row'>
        <div class="col">
            <a class='btn btn-secondary' href="/reporte">Back</a>          
        </div>
    </div>
    <div class='row'>
        <div class="col">        
            <form action="/reporte/{{$report->idr}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>    
        </div>
    </div>  
@endsection