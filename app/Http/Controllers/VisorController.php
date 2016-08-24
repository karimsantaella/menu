<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class VisorController extends Controller
{

    public function metodoInicio()
    {
        $datos1 = 1;
        $datos2 = 2;
        return view('vistaVisor.inicio',[
                    'datos1' => $datos1,
                    'datos2' => $datos2
                    ]);
    }

    public function metodoEjecutivo()
    {
        $datos1 = 1;
        $datos2 = 2;
        return view('vistaVisor.ejecutivo',[
                    'datos1' => $datos1,
                    'datos2' => $datos2
                    ]);
    }

    public function metodoUsuario()
    {
        $datos1 = 1;
        $datos2 = 2;
        return view('vistaVisor.usuario',[
                    'datos1' => $datos1,
                    'datos2' => $datos2
                    ]);
    }

    public function metodoTraductor()
    {
        $datos1 = 1;
        $datos2 = 2;
        return view('vistaVisor.traductor',[
                    'datos1' => $datos1,
                    'datos2' => $datos2
                    ]);
    }

    public function metodoLogin()
    {
        return view('vistaVisor.login');
    }
}
