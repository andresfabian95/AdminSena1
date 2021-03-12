@extends('layouts.app')
@section('title','crear nueva ficha')

@section('content')


    <div class="row">
        <div class="col-md-6  offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('ficha.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Num_Ficha</label>
                            <input type="text"name="Num_Ficha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jornada</label>
                            <input type="text"name="Jornada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Estado</label>
                            <input type="text"name="Estado" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="">id_programa</label>
                            <input type="text"name="id_Programa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">id_instructor</label>
                            <input type="text"name="id_instructor" class="form-control">
                        </div>


                        <hr>

                        <button class="btn btn-primary" type="submit"> Crear</button>

                        <a href="{{route('ficha.index')}}">Cancelar</a>

                    </form>
                </div>
            </div>

        </div>

    </div>







@endsection

