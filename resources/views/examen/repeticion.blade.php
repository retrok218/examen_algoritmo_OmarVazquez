@extends('layouts.app')
@section('content')

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
@endsection
