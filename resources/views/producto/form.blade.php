<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talla') }}
            {{ Form::text('talla', $producto->talla, ['class' => 'form-control' . ($errors->has('talla') ? ' is-invalid' : ''), 'placeholder' => 'S M L']) }}
            {!! $errors->first('talla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $producto->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca_id') }}
            {{ Form::select('marca_id',$marca, $producto->marca_id, ['class' => 'form-control' . ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_inventario') }}
            {{ Form::text('cantidad_inventario', $producto->cantidad_inventario, ['class' => 'form-control' . ($errors->has('cantidad_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Inventario']) }}
            {!! $errors->first('cantidad_inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('fecha_de_embarque') }}
            {{ Form::date('fecha_de_embarque', $producto->fecha_de_embarque, ['class' => 'form-control' . ($errors->has('fecha_de_embarque') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Embarque']) }}
            {!! $errors->first('fecha_de_embarque', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>