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
			
			<div class="row ">
				
				<div class="col-md-12">
					<div class="panel">
					<div class="panel-heading">
						<h3 style="padding-left: 10px; font-weight: 600;">Drilling SCADA Server Status Reports : LocalDrillReport</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>

					<div class="panel-body">
						<form action="#">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="selectdate">Select From-Date (Down Arrow at Right)</label>
								    <input type="date" class="form-control">
								    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								  </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="selectlocation">Select Location from the List</label>
				    			    <select class="form-control" id="" name="search_location">
				                        <option>All</option>
				                        @foreach($asset as $assets)
				                        <option value="{{ $assets->asset}}" data-id="{{ $assets->id}}">{{ $assets->asset }}</option>
				                        @endforeach
				                    </select>
								   We'll never share your email with anyone else.</small>
								  </div>
							</div>
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
						</form>
						
					</div>
					
				</div>
				</div>
			</div>





			<div class="row">
				<div class="col-md-12">
					<!-- BORDERED TABLE -->
					<div class="panel">
						<div class="col-md-6">
							<a href="#" class="btn btn-default" style="margin:10px 10px;">Export to Excel</a>
						</div><!-- 
						<div class="panel-heading">
							<h3 class="panel-title">Bordered Table</h3>
						</div> -->
						<br>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead  class="thead-light">
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Steve</td>
										<td>Jobs</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Steve</td>
										<td>Jobs</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Steve</td>
										<td>Jobs</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Steve</td>
										<td>Jobs</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
										<td>@steve</td>
									</tr>
									<tr>
									      <th scope="row">TOTAL</th>
									      {{-- <td colspan="2">66</td> --}}
									      <td>98</td>
									      <td>66</td>
									      <td>66</td>
									      <td>67</td>
									</tr>
									<tr>
									      <th scope="row">OK</th>
									      <td>43</td>
									      <td>95</td>
									      <td>96</td>
									      <td>97</td>
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