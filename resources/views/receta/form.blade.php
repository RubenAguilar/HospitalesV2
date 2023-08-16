<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cita_id') }}
            {{ Form::text('cita_id', $recetas->cita_id, ['class' => 'form-control' . ($errors->has('cita_id') ? ' is-invalid' : ''), 'placeholder' => 'Cita Id']) }}
            {!! $errors->first('cita_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento1') }}
            {{ Form::text('Tratamiento1', $recetas->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento1') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento1']) }}
            {!! $errors->first('Tratamiento1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento2') }}
            {{ Form::text('Tratamiento2', $recetas->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento2') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento2']) }}
            {!! $errors->first('Tratamiento2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento3') }}
            {{ Form::text('Tratamiento3', $recetas->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento3') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento3']) }}
            {!! $errors->first('Tratamiento3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento4') }}
            {{ Form::text('Tratamiento4', $recetas->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento4') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento4']) }}
            {!! $errors->first('Tratamiento4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento5') }}
            {{ Form::text('Tratamiento5', $recetas->Tratamiento, ['class' => 'form-control' . ($errors->has('Tratamiento5') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento5']) }}
            {!! $errors->first('Tratamiento5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>