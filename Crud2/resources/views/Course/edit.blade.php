@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Add New Student</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('update',$student->id) }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="firstname" class="col-md-2 control-label">ID CURSO</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->first_name }}" name="firstname" placeholder="First Name">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="lastname" class="col-md-2 control-label">Nome</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $student->last_name }}" name="lastname" placeholder="Last Name">
			      </div>
					</div>
								    
			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancelar</button>
			        <button type="submit" class="btn btn-primary">Enviar</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection@extends('layouts.app')