<?php
@extends('layouts.app')
@section('title','lista de programas')

<div class="row-">
    <div class="col-md-6 offset-md-3">
        <form action="{{route('programa.update',$programa->id)}}" method="post">
            @csrf
            @method('PUT')
            <table class="table">
                <tr>
                    <th>CODIGO</th>
                    <td><input type="text" name="Codigo" class="fore-control"value="{{$programa->Codig}}"></td>
                </tr><tr>
                    <th>NOMBRE</th>
                    <td><input type="text" name="Nombre" class="fore-control"value="{{$programa->Nombre}}"></td>
                </tr>

                <th>SIGLA</th>
                <td><input type="text" name="Sigla" class="fore-control"value="{{$programa->Sigla}}"></td>
                </tr>


            </table>
            <a href="{{route('programa.index')}}" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

    </div>
</div>
@endsection
