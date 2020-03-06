<div class="table-responsive">
    <table class="table" id="servios-table">
        <thead>
            <tr>
                <th>Id-Se</th>
        <th>Productos</th>
        <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servios as $servios)
            <tr>
                <td>{{ $servios->id-se }}</td>
            <td>{{ $servios->productos }}</td>
            <td>{{ $servios->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['servios.destroy', $servios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servios.show', [$servios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servios.edit', [$servios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
