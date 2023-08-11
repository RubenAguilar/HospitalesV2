@extends ('layouts.app')
@section('title', 'Perfil')

@section('content')

@if (auth()->guest())

    
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        
                    <div class="float-left">
                        <h4>Perfil</h4>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="/"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{ auth()->user()->name }}</h1>
                    <h1>{{ auth()->user()->ApellidoP }}</h1>
                    <h1>{{ auth()->user()->ApellidoM }}</h1>
                    <h1>{{ auth()->user()->TelefonoP }}</h1>
                    <h1>{{ auth()->user()->email }}</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                            <a href="{{ route('NewPassword') }}" class="btn btn-outline-primary btn-lg">Editar</a>
                            </div>
                            <div class="col-2">
                            <form action="{{route('destroy')}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a class="btn btn-outline-primary btn-lg" type='submit' onclick="return confirm('¿Estas seguro que deseas borrar tu cuenta?')">Borrar</a>    
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>    
@endif


@endsection