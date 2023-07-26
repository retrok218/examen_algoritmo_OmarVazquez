@extends('layouts.app')
@section('content')

    
        <form action="{{ route('procesando_puntuacion') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="bd-example m-0 border-0">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Puntuacion Alice</span>
                            <input type="number" name="alice[1]" id="alice_1" class="form-control"
                                placeholder="Ingresa la puntuacion" max="100" min="1">
                            <input type="number" name="alice[2]" id="alice_2" class="form-control"
                                placeholder="Ingresa la puntuacion" max="100"min="1">
                            <input type="number" name="alice[3]" id="alice_3" class="form-control"
                                placeholder="Ingresa la puntuacion" max="100"min="1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="bd-example m-0 border-0">
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <span class="input-group-text">Puntuacion Bob</span>
                            <input type="number" name="bob[1]" id="bob_1" class="form-control"
                                placeholder="Ingresa la puntuacion" max="100"min="1">
                            <input type="number" name="bob[2]" id="bob_2"class="form-control"
                                placeholder="Ingresa la puntuacion" max="100"min="1">
                            <input type="number" name="bob[3]" id="bob_3" class="form-control"
                                placeholder="Ingresa la puntuacion" max="100"min="1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="bd-example m-0 border-0">
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <input type="submit" value="Puntuar" class="btn btn-outline-success">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        @if (isset($puntos_alice))
            <div class="row">
                <h5>Puntuaciones ingresadas </h5>
                <div class="col">
                    <div class="input-group mb-3 d-flex justify-content-between">
                        @foreach ($puntuaciones as $key => $concursante)
                            <span class="input-group-text">{{ $key }}</span>
                            @foreach ($concursante as $item)
                                <input type="text" value=" {{ $item }}" readonly>
                                <br>
                            @endforeach
                        @endforeach
                    </div>
                    <br>
                </div>
            </div>

            <hr>
            <span>Puntuacion Alice</span>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ronda</th>
                        <th scope="col">Puntos Obtenidos</th>
                    </tr>
                </thead>
                @foreach ($puntos_alice as $key => $alic_punto)
                    <tbody>
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $alic_punto }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <hr>
            <span>Puntuacion Bob</span>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ronda</th>
                        <th scope="col">Puntos Obtenidos</th>
                    </tr>
                </thead>
                @foreach ($puntos_bob as $key => $bob_punto)
                    <tbody>
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $bob_punto }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        @else
            <h4>sin datos</h4>
        @endif

   
@endsection
