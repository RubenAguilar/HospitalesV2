<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar cita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-header">
                        
                        <div class="float-left">
                            <span class="card-title">{{ __('Agenda') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Citas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Citas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('paciente_id') is-invalid @enderror" name="paciente_id" value="{{ auth()->user()->id }}" >
                                <label class="font-weight-bold">Fecha y hora</label>
                                <input type="datetime-local" class="form-control @error('Fecha') is-invalid @enderror" name="Fecha" value="{{ old('Fecha') }}" placeholder="Ingresa la fecha y la hora">
                            
                                <!-- error message untuk title -->
                                @error('Fecha')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-md btn-primary">Agendar</button>
                            <button type="reset" class="btn btn-md btn-warning">Vaciar</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
{{-- <script>
    CKEDITOR.replace( 'content' );
</script> --}}
</body>
</html>