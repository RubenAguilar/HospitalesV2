@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Receta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        
                        <div class="float-left">
                            <span class="card-title">{{ __('Crear') }} Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recetas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control @error('Preceta_id') is-invalid @enderror" name="Preceta_id" value="{{ auth()->user()->id }}" >
                            @include('recetas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
