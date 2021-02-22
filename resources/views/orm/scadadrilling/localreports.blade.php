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
						<h3 style="padding-left: 10px; font-weight: 600;">Producton SCADA Server Status</h3>
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
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
						                <th scope="col">AssetID</th>
						                <th scope="col">Installation-Id..</th>
						                <th scope="col">PSA</th>
						                <th scope="col">PSB</th>
						                <th scope="col">REPC</th>
						                <th scope="col">Remarks..</th>
						                <th scope="col">B/M</th>
						                <th scope="col">C-SC</th>
						                <th scope="col">LL.</th>
						                <th scope="col">GWy.</th>
						                <th scope="col">Ku.</th>
						                <th scope="col">Remarks....</th>
						                <th scope="col">Time.....</th>
						                <th scope="col">Date......</th>
						                <th scope="col">UpdatedBy</th>
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
									      <td colspan="2">Larry the Bird</td>
									      <td>@twitter</td>
									</tr>
									<tr>
									      <th scope="row">OK</th>
									      <td></td>
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