@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('Citas.create') }}" class="btn btn-md btn-success mb-3">AGENDAR CITA</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            
                            <th scope="col">FECHA Y HORA</th>
                            <th scope="col">OPCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($VCitas as $post)
                         
                              @if ($post->paciente_id == Auth::user()->id)
                              <tr>
                               
                                <td>{{ $post->Fecha}}</td>
                                
                                <td class="text-center">
                                    <form onsubmit="return confirm('Estas seguro ?');" action="{{ route('Citas.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('Citas.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('Citas.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">ELIMINAR</button>
                                    </form>
                                </td>
                            </tr>
                              
                            @endif
                          @empty
                              <div class="alert alert-danger">
                                  Aun no hay registros.
                              </div>
                              
                          @endforelse
                        </tbody>
                      </table>  
                      {{ $VCitas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>



    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'Correcto!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script> --}}
@endsection
