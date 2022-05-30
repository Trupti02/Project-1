<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request){
        $form= new Form();
        $form->email=$request->email;
        $form->password=$request->password;
        $form->save();
    }

    public function index(){
        $form=Form::all();
        return view('table',compact('form'));
    }
}


