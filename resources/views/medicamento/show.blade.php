@extends('layouts.app')

@section('template_title')
    {{ $medicamento->name ?? "{{ __('Show') Medicamento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicamento.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Medicamento:</strong>
                            {{ $medicamento->Nombre_medicamento }}
                        </div>
                        <div class="form-group">
                            <strong>Gramaje:</strong>
                            {{ $medicamento->gramaje }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Med:</strong>
                            {{ $medicamento->tipo_med }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
