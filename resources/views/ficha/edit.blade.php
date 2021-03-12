@extends('layouts.app')
@section('title','lista de fichas')

@section('content')


    <div class="row-">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('ficha.update',$ficha->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tr>
                        <th>NUMERO DE FICHA</th>
                        <td><input type="text" name="Num_Ficha" class="fore-control"value="{{$ficha->Num_Ficha}}"></td>
                    </tr><tr>
                        <th>JORNADA</th>
                        <td><input type="text" name="Jornada" class="fore-control"value="{{$ficha->Jornada}}"></td>
                    </tr>

                        <th>ESTADO</th>
                        <td><input type="text" name="Estado" class="fore-control"value="{{$ficha->Estado}}"></td>
                    </tr>
                    <tr>
                        <th>PROGRAMA</th>
                        <td><input type="text" name="id_Programa" class="fore-control"value="{{$ficha->id_Programa}}"></td>
                    </tr>
                    <tr>
                        <th>INSTRUCTOR</th>
                        <td><input type="text" name="id_instructor" class="fore-control"value="{{$ficha->id_instructor}}"></td>
                    </tr>


                </table>
                <a href="{{route('ficha.index')}}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

        </div>
    </div>
@endsection
