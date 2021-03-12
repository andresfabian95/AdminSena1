
@extends('layouts.app')
@section('title','crear nueva ficha')

@section('content')
    <div class="row-">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <tr>
                    <th>NUMERO DE FICHA</th>
                    {{$ficha->Num_Ficha}}</td>
                </tr>


                <tr>
                    <th>JORNADA</th>
                    <td>{{$ficha->Jornada}}</td>
                </tr>

                <tr>
                    <th>ESTADO</th>
                    <td>{{$ficha->Estado}}</td>
                </tr>

                <tr>
                    <th>PROGRAMA</th>
                    <td>{{$ficha->id_Programa}}</td>
                </tr>
                <tr>
                    <th>INSTRUCTOR</th>
                    <td>{{$ficha->id_instructor}}</td>
                </tr>


            </table>
            <a href="{{route('ficha.index')}}" class="btn btn-default">Volver</a>
            <a href="{{route('ficha.edit')}}" class="btn btn-warning">Editar</a>

        </div>

    </div>
@endsection
