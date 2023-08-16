@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? "{{ __('Show') Cita" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cita.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paciente Id:</strong>
                            {{ $cita->paciente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechahora:</strong>
                            {{ $cita->FechaHora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
