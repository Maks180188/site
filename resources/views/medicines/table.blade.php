<div class="table-responsive">
    <table class="table" id="medicines-table">
        <thead>
            <tr>
                <th>Identifier</th>
        <th>Name</th>
        <th>Main Active Ingredient Identifier</th>
        <th>Manufacturer Identifier</th>
        <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicines as $medicine)
            <tr>
                <td>{{ $medicine->identifier }}</td>
            <td>{{ $medicine->name }}</td>
            <td>{{ $medicine->main_active_ingredient_identifier }}</td>
            <td>{{ $medicine->manufacturer_identifier }}</td>
            <td>{{ $medicine->price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['medicines.destroy', $medicine->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('medicines.show', [$medicine->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('medicines.edit', [$medicine->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
