@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Receta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Editar') }} Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('receta.update', $recetas->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('receta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
