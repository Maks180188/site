<!-- Identifier Field -->
<div class="col-sm-12">
    {!! Form::label('identifier', 'Identifier:') !!}
    <p>{{ $medicine->identifier }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $medicine->name }}</p>
</div>

<!-- Main Active Ingredient Identifier Field -->
<div class="col-sm-12">
    {!! Form::label('main_active_ingredient_identifier', 'Main Active Ingredient Identifier:') !!}
    <p>{{ $medicine->main_active_ingredient_identifier }}</p>
</div>

<!-- Manufacturer Identifier Field -->
<div class="col-sm-12">
    {!! Form::label('manufacturer_identifier', 'Manufacturer Identifier:') !!}
    <p>{{ $medicine->manufacturer_identifier }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $medicine->price }}</p>
</div>

