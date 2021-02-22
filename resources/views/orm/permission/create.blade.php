@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Create New Permission</h3>
					@include('orm.includes.error')
					
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('permission.store') }}" method="post">
						@csrf
					    <div class="form-group col-md-4 col-md-offset-4">
					      <label for="role">Permission </label>
					      <input type="role" class="form-control" id="Permission" placeholder="Enter Permission" name="Permission">
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