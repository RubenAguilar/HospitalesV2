<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_medicamento') }}
            {{ Form::text('Nombre_medicamento', $medicamento->Nombre_medicamento, ['class' => 'form-control' . ($errors->has('Nombre_medicamento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Medicamento']) }}
            {!! $errors->first('Nombre_medicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gramaje') }}
            {{ Form::text('gramaje', $medicamento->gramaje, ['class' => 'form-control' . ($errors->has('gramaje') ? ' is-invalid' : ''), 'placeholder' => 'Gramaje']) }}
            {!! $errors->first('gramaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_med') }}
            {{ Form::text('tipo_med', $medicamento->tipo_med, ['class' => 'form-control' . ($errors->has('tipo_med') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Med']) }}
            {!! $errors->first('tipo_med', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>