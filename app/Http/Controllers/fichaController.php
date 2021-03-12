<?php

namespace App\Http\Controllers;


use App\Models\ficha;
use Illuminate\Http\Request;

class fichaController extends Controller
{
    //
    public function index(){
        $ficha=ficha::all();
        return view('ficha.index',compact($ficha));


    }
    public function create(){
        return view('ficha.create');

    }
    public function store(request $request){
        ficha::create($request->all());
        return redirect()->route('ficha.index');
    }

    public function show($id){
        $ficha=ficha::find($id);
        return view('ficha.show',compact('ficha'))->paginate(5);
        //return $user;


    }

    public function edit($id){
        $ficha=ficha::find($id);
        return view('ficha.edit',compact('ficha'));

    }

    public function update(request $request,$id ){
        $ficha=ficha::find($id)->update($request->all());
        return redirect(route('ficha.show',$id))->paginate(5);

    }

}
