@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Create New Role</h3>
					@include('orm.includes.error')
					
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('roles.store') }}" method="post">
						@csrf
					    <div class="form-group col-md-4 col-md-offset-4">
					      <label for="role">Role </label>
					      <input type="role" class="form-control" id="name" placeholder="Enter Role" name="name">
					    </div>
					    <div class="col-md-4 col-md-offset-4">
	    	              	<label for="name"> Permissions</label>
	    	              	@foreach ($permissions as $permission)
    			              	<div class="checkbox">
    			              		<label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
    			              	</div>
	    	              	@endforeach
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