@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Update Role</h3>
					@include('orm.includes.error')
					
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('roles.update', $role->id) }}" method="post">
						@csrf
						{{ method_field('PUT') }}
					    <div class="form-group col-md-4 col-md-offset-4">
					      <label for="role">Role </label>
					      <input type="role" class="form-control" id="name" value="{{ $role->name }}" name="name">
					    </div>
					    <div class="col-md-4 col-md-offset-4">
	    	              	<label for="name"> Permissions</label>
	    	              	
						@foreach($permission as $value)
						<div class="form-check">
						     <label class="form-check-label">
						        <input class="form-check-input" type="checkbox" name="permission[]" value="{{$value->id}}" {{in_array($value->id,$rolePermissions)?'checked':''}} >
						        {{$value->name}}
						     </label>
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