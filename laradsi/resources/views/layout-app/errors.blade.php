@if(count($errors) > 0)
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span 
					aria-hidden="true">&times;</span></button>
					@foreach($errors->all() as $message)
						{{$message}}
					@endforeach
				</div>
			@endif