
@extends('layouts.app')
@section('title','lista de fichas')

@section('content')
    <br>
    <br>
    <a href="{{route('ficha.crear')}}"class="btn btn-primary">Crear Nueva ficha</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>NUMERO DE FICHA </th>
                <th>JORNADA</th>
                <th>ESTADO</th>
                <th>PROGRAMA</th>
                <th>INSTRUCTOR</th>



            </tr>
            </thead>
            <tbody>

            @foreach($fichas as $ficha)

                <tr>
                    <td>{{$ficha->Num_Ficha}}</td>
                    <td>{{$ficha->Jornada}}</td>
                    <td>{{$ficha->Estado}}</td>
                    <td>{{$ficha->id_Programa}}</td>
                    <td>{{$ficha->id_instructor}}</td>

                    <td>
                        <a href=""class="btn btn-danger btn-sm">Desactivar</a>
                        <a href=""class="btn btn-info btn-sm"> Ver Detalles</a>



                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




@endsection
