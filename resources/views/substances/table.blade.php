<div class="table-responsive">
    <table class="table" id="substances-table">
        <thead>
            <tr>
                <th>Identifier</th>
        <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($substances as $substance)
            <tr>
                <td>{{ $substance->identifier }}</td>
            <td>{{ $substance->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['substances.destroy', $substance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('substances.show', [$substance->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('substances.edit', [$substance->id]) }}" class='btn btn-default btn-xs'>
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
