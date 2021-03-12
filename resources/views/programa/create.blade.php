<?php
@extends('layouts.app')
@section('title','crear programa')

@section('content')

<div class="row">
    <div class="col-md-6  offset-md-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('programa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Codigo</label>
                        <input type="text"name="Codigo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text"name="Nombre" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Sigla</label>
                        <input type="text"  name="Sigla" class="form-control">
                    </div>






                    <hr>

                    <button class="btn btn-primary" type="submit"> Crear</button>

                    <a href="{{route('programa.index')}}">Cancelar</a>

                </form>
            </div>
        </div>

    </div>

</div>







@endsection
