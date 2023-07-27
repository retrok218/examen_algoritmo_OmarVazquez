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

    function limpiar_texto($texto){
       // $texto  = utf8_encode($texto);
        $pattern = "#[^\wñÑáÁéÉíÍóÓúÚ]+#";
        $texto = trim(preg_replace($pattern," ", $texto)); //limpiar caracteres y espacios en blanco
        $texto = str_replace (array('á','Á','é','É','í','Í','ó','Ó','ú','Ú',) , array('a','A','e','E','i','I','o','O','u','U',), $texto);
        $texto = strtolower($texto);
        return $texto;
    }
    public function procesando_texto(Request $request){
        $texto = request('texto_m_php');               
        $texto_limpio = $this->limpiar_texto($texto);                
        $arreglo_texto = explode(' ',$texto_limpio); // a arreglo
        $narreglo=[];
        //$tarreglo =  str_split($texto);
        //$ttt = array_count_values($arreglo_texto);   :::: facilito     
        foreach ($arreglo_texto as $palabra) {
            if (isset ($narreglo[$palabra])) {
                $narreglo[$palabra] ++;
            }else {
                $narreglo[$palabra] = 1;
            }            
        }
        return view('examen/repeticion')->with(['narreglo'=>$narreglo]);
    }
}
