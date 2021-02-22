@extends('orm.layouts.app')

@section('main')
<style>
	.table .thead-light th {
	    color: #495057;
	    background-color: #e9ecef;
	    border-color: #dee2e6;
	}
</style>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-12">
					<!-- BORDERED TABLE -->
					<div class="panel">
						<div class="panel-heading">
						<h3 style="padding-left: 10px; font-weight: 600;">All Users</h3>
						@include('orm.includes.error')
						<a href="{{ route('user.create') }}" class="btn btn-info pull-right">CREATE</a>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead  class="thead-light">
									<tr>
										<th>S.N.</th>
										<th>CPF NO</th>
										<th>Name</th>
										<th>Email</th>
										<th>Designation</th>
										<th>Section</th>
										<th>Asset</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($user as $users)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $users->CPF_NO }}</td>
										<td>{{ $users->name }}</td>
										<td>{{ $users->email }}</td>
										<td>{{ $users->DESIGNATION }}</td>
										<td>{{ $users->SECTION }}</td>
										<td>{{ $users->ASSET }}</td>
										<td>
											@if(!empty($users->getRoleNames()))
										       @foreach($users->getRoleNames() as $v)
										          <label class="badge badge-success">{{ $v }}</label>
										       @endforeach
										     @endif
										</td>
										<td>
											<a href="{{ route('user.edit', $users->id) }}" class="btn btn-info"><span class="lnr lnr-pencil"></span></a>
											
											<a href="#" class="btn btn-danger"><span class="lnr lnr-trash"></span></a>
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