@extends('orm.layouts.app')

@section('main')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Create New User</h3>
					@include('orm.includes.error')
					<a href="{{ route('user.index') }}" class="btn btn-info pull-right">BACK</a>
				</div>
				<hr>
				<div class="panel-body"> 
					<form action="{{ route('user.store') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" class="" style="margin-left: 1%;">Name</label>
								    <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name" placeholder="Name" required autofocus />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" class="" style="margin-left: 1%;">Email</label>
								    <input type="email" class="form-control" id="email" :value="old('email')" name="email" placeholder="Email" required autofocus />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="CPFNO" class="" style="margin-left: 1%;" >CPF NO</label>
								    <input type="text" class="form-control" id="cpf_no" value="{{ old('cpf_no') }}" name="cpf_no" placeholder="CPF NO" required autofocus />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="degination" class="" style="margin-left: 1%;">Desination</label>
								    <input type="text" class="form-control" id="degination" value="{{ old('degination') }}" name="degination" placeholder="Desination" required autofocus />
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="section" class="" style="margin-left: 1%;">Section</label>
								    <input type="text" class="form-control" id="section" value="{{ old('section') }}" name="section" placeholder="Section" required autofocus />
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" class="" style="margin-left: 1%;">Role</label>
								     <select class="form-control" id="role" name="role[]" multiple>
								     	@foreach($roles as $role)
								        <option value="{{ $role->name }}">{{$role->name }}</option>
								        @endforeach
								       <!--option>Scada</option>
								        <option>Communication</option>
								        <option>Instrumentation</option>
								        <option>Scada & Communication</option-->}}
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
									<div class="form-group">
								    <label for="password" class="" style="margin-left: 1%;">Password</label>
								    <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="password" placeholder="Password" required autofocus />
								</div>
								    <!-- <label for="Location_ID" class="" style="margin-left: 1%;">Location_ID</label>
								    <input type="text" class="form-control" id="Location_ID" name="Location_ID" placeholder="Location_ID" required autofocus /> -->
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <!-- <label for="authorised" class="" style="margin-left: 1%;">Authorised By</label>
								    <input type="text" class="form-control" id="authorised" value="{{ old('authorised') }}" name="authorised" placeholder="Authorised" required autofocus /> -->
								</div>
							</div>
							<div class="col-md-6">
								<!-- <div class="form-group">
								    <label for="password" class="" style="margin-left: 1%;">Password</label>
								    <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="password" placeholder="Password" required autofocus />
								</div> -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-md-offset-8">
								<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection