@extends('layouts.app') 

@section('content')
    <div class='row'>
        <div class="col">
            <h1>Reporte: {{$reporte->idr}}</h1>
        </div>
    </div>
    <div class='row'>
        <div class="col">
            <a class='btn btn-secondary' href="/reporte">Back</a>          
        </div>
    </div>
    <div class='row'>
        <div class="col">
            <h3>Detalles</h3>
            <table>
                @foreach ($reporte->usuario() as $user)
                    <tr>
                        <td>{{$user->description}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->amount}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>  
@endsection
