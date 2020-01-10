<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuariodefault($nombre='invitado'){
        return 'Usuario '.$nombre;
    }

    public function usuariocomentario($nombre,$comentarioid){
        return 'Usuario: '.$nombre. '<br /> Comentario: '.$comentarioid;
    }
}
