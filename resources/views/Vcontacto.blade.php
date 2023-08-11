@extends('layouts.app')
@section('title', 'Contactanos')

@section('content')
<div class="container Ccontacto">
  <div class="row justify-content-center ">
      <div class="col-md-6">
        <form class="card cartaC" method='POST' action="{{ route('Vcontacto') }}">
          <h2>Escribenos tus dudas</h2>
          
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}">
              {!! $errors->first ('email','<small>:message</small>') !!}
            </div>
            @csrf
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input name="telefono" type="phone" class="form-control" id="Telefono" value="{{old('telefono')}}">
              {!! $errors->first ('telefono','<small>:message</small>') !!}
            </div>
            @csrf
            <div class="form-group">
                <label for="Comentarios">Comentarios</label>
                <textarea name="comentario" class="form-control" id="Comentarios" rows="4">{{old('comentario')}}</textarea>
                {!! $errors->first ('comentario','<small>:message</small>') !!}
            </div>
              <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      <div class="col-md-6">
        <form class="card cartaC">
       
          <h2>Visitanos en nuestro hospital</h2>
          
          <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
              <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
              var setting = {"query":"1020 Jackson St, Oakland, California, EE. UU.","width":650,"height":308,"satellite":false,"zoom":18,"placeId":"ChIJl5sUpMqAj4ARcT0way3OK5w","cid":"0x9c2bce2d6b303d71","coords":[37.7995973,-122.2664104],"lang":"es","queryString":"1020 Jackson St, Oakland, California, EE. UU.","centerCoord":[37.7995973,-122.2664104],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"965621"};
              var d = document;
              var s = d.createElement('script');
              s.src = 'https://1map.com/js/script-for-user.js?embed_id=965621';
              s.async = true;
              s.onload = function (e) {
                window.OneMap.initMap(setting)
              };
              var to = d.getElementsByTagName('script')[0];
              to.parentNode.insertBefore(s, to);
            })();</script><a href="https://1map.com/es/map-embed%22%3E1"> Map</a></div>
      </div>
    </form>
      </div>
  </div>
</div>

@endsection