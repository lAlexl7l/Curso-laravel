@extends('layouts.app')

@section('content')
    <div class='row'>
        <div class="col">
            <h1>Reportes</h1>
        </div>
    </div>
    <div class='row'>
        <div class="col">
            <a class='btn btn-primary' href="/reporte/create">Create a new report</a>          
        </div>
    </div>
    <div class='row'>
            <div class="col">        
            <table class="table">
                    @foreach ($reporte as $reporte)
                        <tr>
                        <td><a href="/reporte/{{$reporte->idr}}">{{$reporte->description}}</a></td>
                        <td><a href="/reporte/{{$reporte->idr}}/edit">Edit</a></td>
                        <td><a href="/reporte/{{$reporte->idr}}/confirmDelete">Delete</a></td>                        </tr>
                    @endforeach
            </table>                
        </div>
    </div>  
@endsection