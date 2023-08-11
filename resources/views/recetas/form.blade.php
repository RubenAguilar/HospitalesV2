<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <input type="hidden" class="form-control @error('Preceta_id') is-invalid @enderror" name="Preceta_id" value="{{ auth()->user()->id }}" >
            {{ Form::label('cita_id') }}
            {{ Form::text('cita_id', $receta->cita_id, ['class' => 'form-control' . ($errors->has('cita_id') ? ' is-invalid' : ''), 'placeholder' => 'Cita Id']) }}
            {!! $errors->first('cita_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tratamiento') }}
            {{ Form::text('tratamiento', $receta->tratamiento, ['class' => 'form-control' . ($errors->has('tratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento']) }}
            {!! $errors->first('tratamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>