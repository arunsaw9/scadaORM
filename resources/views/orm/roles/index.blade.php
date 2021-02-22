@extends('orm.layouts.app')

@section('main')

<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-12">
					<!-- BORDERED TABLE -->
					<div class="panel table-responsive">
						
						<div class="panel-heading">
							<h3> User Roles</h3>
							<div class="right">
								<a href="{{ route('roles.create') }}" class="btn btn-info pull-right">CREATE</a>
							</div>
							@include('orm.includes.error')
						</div>
						<br>
						<div class="panel-body">
							<table class="table table-borderless table-responsive">
								<thead  class="thead-light">
									<tr>
										<th>S.N</th>
										<th>Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($roles as $role)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>
											<a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a>
										</td>
										<td>
											@can('role-edit')
											    <a href="{{ route('roles.edit', $role->id) }}" style="margin: 0 10px;" class="btn btn-primary">Edit</a>
											@endcan
											
											<a href="{{ route('roles.destroy', $role->id) }}" class="btn btn-danger">Delete</a>
										</td>
									</tr>
									@endforeach
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END BORDERED TABLE -->
				</div>
				
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@endsection

@section('scriptsection')

@endsection

