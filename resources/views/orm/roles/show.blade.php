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
							<h3> Roles Permission</h3>
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
										<th>Role</th>
										<th>Permission</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td>{{ $role->name }}</td>

										<td>
											@foreach( $rolePermissions as $p)
									          <label class="badge badge-success">{{ $p->name }}</label>
									       	@endforeach
										</td>
										
									</tr>
									
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
