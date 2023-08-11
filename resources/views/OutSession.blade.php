
@extends('layouts.app')
@section ('title', 'Inicio')
@section('content')
   
    <div class="container mainHome">
        
        <div class="card-groupH row">
           
        <div class="card col-4">
            <img src="img/iconos/calendar-date.svg" class="imagenCarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">CITAS</h5>
            <p class="card-text">Agenda tus citas en cualquier momento, desde la comodidad de tu casa, en nuestra pagina web.</p>
          </div>
        </div>
        <div class="card col-4">
            <img src="img/iconos/prescription2.svg" class="imagenCarta" alt="...">   
          <div class="card-body">
            <h5 class="card-title">RECETAS</h5>
            <p class="card-text">No olvides que puedes ver tu traramiento en cualquier momento.</p>
          </div>
        </div>
        <div class="card col-4">
            <img src="img/iconos/heart-pulse-fill.svg" class="imagenCarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">HISTORIAL MEDICO</h5>
            <p class="card-text">Aunque pase el tiempo, recuerda que, puedes consultar tu historial medico en cualquier momento.</p>
          </div>
        </div>
      </div>
    </div>
    @endsection
  
       
   
