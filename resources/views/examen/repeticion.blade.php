@extends('layouts.app')
@section('content')
<main>
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <h3>JS</h3>
        <form id="texto_cont" name="texto_cont">
            <div class="input-group">
                <div class="w-100 p-3" style="background-color: #eee;">
                    <span class="input-group-text">Ingrese el Texto Para Contar las Palabras Usadas</span>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="texto_m" style="height: 150px"></textarea>
                        <label for="floatingTextarea">Ingresa </label>
                    </div>
                </div>
    
            </div>
        </form>
        <button onclick="recorrer_texto()">Recorrer Texto </button>
        <h5>Conteo Generado</h5>
        <ul id="conteo_texto"></ul>
    </div>
        
  
       
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <h4>php</h4>
        <form action="{{route('procesando_texto')}}">
            <div class="input-group">
                <div class="w-100 p-3" style="background-color: #eee;">
                    <span class="input-group-text">Ingrese el Texto Para Contar las Palabras Usadas</span>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="texto_m_php" style="height: 150px" name="texto_m_php"></textarea>
                        <label for="floatingTextarea">Ingresa </label>
                    </div>
                </div>

            </div>
            <input type="submit" value="Evaluar">
        </form>   
        <div class="row mb-3 text-center">
            @isset($narreglo)
                @foreach ($narreglo as $key => $dato)
                <div class="col-4 themed-grid-col">{{$key}} {{$dato}}</div>  
                <hr>
                @endforeach
            @endisset
        </div>        
    </div>       
</main>
@endsection
{{-- “Érase una vez una niñita que lucía una hermosa capa
de color rojo. Como la niña la usaba muy a menudo, todos la
llamaban Caperucita Roja. Un día, la mamá de Caperucita Roja la
llamó y le dijo: —Abuelita no se siente muy bien, he horneado
unas galletitas y quiero que tú se las lleves. —Claro que sí
—respondió Caperucita Roja, poniéndose su capa y llenando su
canasta de galletas recién horneadas. Antes de salir, su mamá
le dijo: — Escúchame muy bien, quédate en el camino y nunca
hables con extraños. —Yo sé mamá —respondió Caperucita 434 Roja y
salió inmediatamente hacia la casa de la abuelita. 33” --}}