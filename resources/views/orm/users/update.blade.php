@extends('orm.layouts.app')

@section('main')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Create New User</h3>
					{{-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> --}}
					@include('orm.includes.error')

				</div>

				<hr>
				<div class="panel-body"> 
					<form action="{{ route('user.update', $update->id) }}" method="post">
						@csrf
						{{ method_field('PUT') }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" class="" style="margin-left: 1%;">Name</label>
								    <input type="text" class="form-control" id="name" value="{{ $update->name }}" name="name" required autofocus />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" class="" style="margin-left: 1%;">Email</label>
								    <input type="email" class="form-control" id="email" value="{{ $update->email }}" name="email"  required autofocus />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="CPFNO" class="" style="margin-left: 1%;" >CPF NO</label>
								    <input type="text" class="form-control" id="cpf_no" value="{{ $update->CPF_NO }}" name="cpf_no"required autofocus />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="degination" class="" style="margin-left: 1%;">Desination</label>
								    <input type="text" class="form-control" id="degination" value="{{ $update->DESIGNATION }}" name="degination" required autofocus />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="section" class="" style="margin-left: 1%;">Section</label>
								    <input type="text" class="form-control" id="section" value="{{ $update->SECTION }}" name="section" required autofocus />
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" class="" style="margin-left: 1%;">Role</label>
								    <!-- @if(!empty($update->getRoleNames()))
				        				@foreach($update->getRoleNames() as $v)
			        					@endforeach
			        				@endif -->

								    <select class="form-control" id="role" name="role[]" multiple>
								        
									@if(!empty($role))
				        				@foreach($role as $roles)
				        				<option value="{{ $roles->name }}">{{ $roles->name }}</option>
			        					@endforeach
			        				@endif
								    </select>
								</div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Location" class="" style="margin-left: 1%;">Location</label>
									<select class="form-control input-sm" name="asset">
										@foreach($asset as $assets)
										<option value="{{ $assets->asset }}">{{ $assets->asset }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <!-- <label for="Location_ID" class="" style="margin-left: 1%;">Location_ID</label>
								    <input type="text" class="form-control" id="Location_ID" value="{{ $update->LOCATION_ID }}" name="Location_ID" required autofocus /> -->
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6">
								<br>	
								<button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scriptsection')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
	<script>
		$(document).ready(function() { 

		    $('input').tagsinput({
		      typeahead: {
		        source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo'],
		    		afterSelect: function() {
		    			this.$element[0].value = '';
		    		}
		      }
		    });
		});
	</script>
@endsection