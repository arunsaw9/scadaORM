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
								<a href="{{ route('permission.create') }}" class="btn btn-info pull-right">CREATE</a>
							</div>
							@include('orm.includes.error')
						</div>
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
									@foreach($perm_list as $perm_lists)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>
											<a href="{{ route('permission.show', $perm_lists->id) }}">{{ $perm_lists->name }}</a>
										</td>
										<td>
											@can('role-edit')
											    <a href="{{ route('permission.edit', $perm_lists->id) }}" style="margin: 0 10px;" class="btn btn-primary">Edit</a>
											@endcan

											<form id="delete-form-{{ $perm_lists->id }}" method="post" action="{{ route('permission.destroy',$perm_lists->id) }}" style="display: none">
											  @csrf
											  @method('DELETE')
											</form>
											<a href="" class="btn btn-danger" onclick="
											if(confirm('Are you sure, You Want to delete this?'))
											    {
											      event.preventDefault();
											      document.getElementById('delete-form-{{ $perm_lists->id }}').submit();
											    }
											    else{
											      event.preventDefault();
											    }" >Delete</a>

											{{-- <form action="{{ route('permission.destroy', $perm_lists->id) }}" method="POST">

						                        @csrf
						                        @method('DELETE')

						                        <button type="submit" title="delete" class="btn btn-danger">
						                            Delete
						                        </button>
						                    </form> --}}


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

