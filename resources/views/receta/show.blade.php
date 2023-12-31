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
                            <a class="btn btn-primary" href="{{ route('receta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cita Id:</strong>
                            {{ $recetas->cita_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $recetas->Tratamiento1 }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $recetas->Tratamiento2 }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $recetas->Tratamiento3 }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $recetas->Tratamiento4 }}
                        </div>
                        <div class="form-group">
                            <strong>Tratamiento:</strong>
                            {{ $recetas->Tratamiento5 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
