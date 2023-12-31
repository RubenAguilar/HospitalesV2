<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-header">
                        
                        <div class="float-left">
                            <span class="card-title">{{ __('Editar') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cita.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                      
                       
                      


                            <form method="POST" action="{{ route('cita.update', $cita->id) }}" enctype="multipart/form-data">
                             
                                @csrf
                                @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Fecha y hora</label>
                                <input type="datetime-local" class="form-control @error('FechaHora') is-invalid @enderror" name="FechaHora" value="{{ old('FechaHora') }}" placeholder="Ingresa la fecha y la hora">
                            
                                <!-- error message untuk title -->
                                @error('FechaHora')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                           

                            <button type="submit" class="btn btn-md btn-primary">Actualizar</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            

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