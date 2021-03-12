<?php
@extends('layouts.app')
@section('title','lista de programas')

@section('content')
    <div class="row-">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <tr>
                    <th>CODIGO</th>
                    {{$programa->Codigo}}</td>
                </tr>


                <tr>
                    <th>NOMBRE</th>
                    <td>{{$programa->Nombre}}</td>
                </tr>

                <tr>
                    <th>SIGLA</th>
                    <td>{{$programa->Sigla}}</td>
                </tr>




            </table>
            <a href="{{route('programa.index')}}" class="btn btn-default">Volver</a>
            <a href="{{route('programa.edit')}}" class="btn btn-warning">Editar</a>

        </div>

    </div>
@endsection
