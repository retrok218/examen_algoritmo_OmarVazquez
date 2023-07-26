<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index(){
        return view('index');
    }
    public function puntuacion(){
        return view('examen/alice-bob');        
    }
    
    public function procesando_p(Request $request){
      $puntuaciones =  request()->except(['_token','_method']); 
      $puntos_alice = [];
      $puntos_bob = [];
      $puntos_alice['total'] =0;
      $puntos_bob['total'] =0;
      
         for ($i=1; $i <= 3; $i++) { 
            if ($puntuaciones['alice'][$i] > $puntuaciones['bob'][$i]) {
                $puntos_alice[$i] = 1;
                $puntos_alice['total'] ++;
                $puntos_bob[$i] = 0;
            }elseif ($puntuaciones['alice'][$i] == $puntuaciones['bob'][$i]) {
                $puntos_alice[$i] = 0;
                $puntos_bob[$i] = 0;
            }else{
                $puntos_alice[$i] = 0;
                $puntos_bob[$i] = 1;
                $puntos_bob['total']++;            
            }             
         }

//dd($puntuaciones)       ;
      return view('examen/alice-bob')->with(['puntos_alice'=>$puntos_alice,'puntos_bob'=>$puntos_bob,'puntuaciones'=>$puntuaciones]) ;
    }


    public function repticion_palabras(){
        return view('examen/repeticion');
    }
    public function procesando_texto(Request $request){
        $texto = request('texto_m');
        $pattern = "#[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-|:|\&|@)]+#";
        $texto = trim(preg_replace($pattern, " ", $texto));
        $tarreglo =  str_split($texto);
        dd($texto);
        return view('examen/repeticion');
    }
}
