<?php

namespace App\Http\Controllers;
use App\Mail\Mreceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ComentariosContac extends Controller
{
    public function store(){
        $msg = request()->validate([
             'email' => 'required|email',
             'telefono' => 'required|numeric',
             'comentario' => 'required|min:3'
         ]);
 
         Mail::to('nobul5@hotmail.com')->queue(new Mreceived ($msg));
          
         return redirect('/Vcontacto');
          
     }
}
