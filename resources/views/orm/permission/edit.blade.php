@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Update Permission</h3>
					@include('orm.includes.error')
					
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('permission.update', $update->id) }}" method="post">
						@csrf
						{{ method_field('PUT') }}
					    <div class="form-group col-md-4 col-md-offset-4">
					      <label for="role">Permission </label>
					      <input type="role" class="form-control" id="Permission" value="{{ $update->name }}" name="Permission">
					    </div>
					    
	    	            <div class="col-md-4 col-md-offset-4">
	    	            	<button type="submit" class="btn btn-default">Submit</button>
	    	            </div>
					    
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scriptsection')

@endsection