@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? "{{ __('Show') Receta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cita Id:</strong>
                            {{ $receta->cita_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $receta->tratamiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
