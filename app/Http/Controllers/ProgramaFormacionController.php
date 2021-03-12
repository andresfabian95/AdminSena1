<?php

namespace App\Http\Controllers;

use App\Models\ProgramaFormacion;
use Illuminate\Http\Request;

class ProgramaFormacionController extends Controller
{
    //
    public function index(){
        $programa=programa::all();
        return view('programa.index',compact($programa));


    }
    public function create($Sigla){
        $Sigla = Str::upper(Input::get('Sigla'));
        return view('programa.create');

    }
    public function store(request $request){
        prorama::create($request->all());
        return redirect()->route('programa.index');
    }
    public function show($id){
        $programa=programa::find($id);
        return view('programa.show',compact('programa'))->paginate(5);
        //return $user;


    }

    public function edit($id){
        $programa=programa::find($id);
        return view('programa.edit',compact('programa'));

    }

    public function update(request $request,$id ){
        $programa=programa::find($id)->update($request->all());
        return redirect(route('programa.show',$id))->paginate(5);

    }


}
