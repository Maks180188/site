<!-- Identifier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identifier', 'Identifier:') !!}
    {!! Form::number('identifier', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Main Active Ingredient Identifier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_active_ingredient_identifier', 'Main Active Ingredient Identifier:') !!}
    {!! Form::number('main_active_ingredient_identifier', null, ['class' => 'form-control']) !!}
</div>

<!-- Manufacturer Identifier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manufacturer_identifier', 'Manufacturer Identifier:') !!}
    {!! Form::number('manufacturer_identifier', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>