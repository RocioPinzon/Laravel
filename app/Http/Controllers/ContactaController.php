<?php

namespace App\Http\Controllers;

use App\Mail\ContactaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactaController extends Controller
{
    public function index(){
        return view('contacta.index');

    }

    public function store(Request $request){
       //dd($request);
       $request->validate([
           'name'=>'required',
           'email'=>'required|email',
           'mensaje'=>'required',
       ]);
        
        
        $correo = new ContactaMail($request->all());
        
        //dd($correo);
        Mail::to('rociopinzonb@gmail.com')->send($correo);
    
        return redirect(route('contacta.index'))->with('success', 'Email enviado');
    }
}
