<div class="table-responsive">
    <table class="table" id="vendors-table">
        <thead>
            <tr>
                <th>Identifier</th>
        <th>Name</th>
        <th>Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendors as $vendor)
            <tr>
                <td>{{ $vendor->identifier }}</td>
            <td>{{ $vendor->name }}</td>
            <td>{{ $vendor->url }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vendors.destroy', $vendor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vendors.show', [$vendor->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vendors.edit', [$vendor->id]) }}" class='btn btn-default btn-xs'>
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
