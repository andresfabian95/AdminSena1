<?php
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
                <th>CODIGO </th>
                <th>NOMBRE</th>
                <th>SIGLA</th>

            </tr>
            </thead>
            <tbody>

            @foreach($programas as $programa)

                <tr>
                    <td>{{$programa->Codigo}}</td>
                    <td>{{$programa->Nombre}}</td>
                    <td>{{$programa->Sigla}}</td>


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
