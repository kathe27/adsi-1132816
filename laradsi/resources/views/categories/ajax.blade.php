@foreach($categories as $var)
	<tr>
		<td>
			{{ $var->id}}
		</td>
		<td>
			{{ $var->name }}
		</td>
		<td>
			<a href="{{ url('category/'.$var->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
			<form action="{{ url('category/'.$var->id) }}" method="POST" style="display: inline-block;">
				{{ method_field('delete') }}
				{!! csrf_field() !!}
				<button class="btn btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i></button>
			</form>
		</td>
	</tr>
@endforeach