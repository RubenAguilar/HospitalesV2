<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('paciente_id') }}
            {{ Form::text('paciente_id', $cita->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>