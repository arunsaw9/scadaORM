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
						<h3 style="padding-left: 10px; font-weight: 600;">Production Server Status Data</h3>
						<a href="{{ route('scadadrilling.create') }}" class="btn btn-info pull-right">CREATE</a>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>

					<div class="panel-body">
						<form action="#">
							<div class="col-md-6" style=" border-right: 1px solid #ccc;">
								<div class="form-group">
								    <label for="selectdatefordata">Select Date to View Previous Data</label>
								    <input type="date" class="form-control">
								</div>
								<input type="submit" class="btn btn-primary pull-right" value="View Data">
							</div>
						</form>

						<form action="#">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="copytodata">Select Date to Copy Data</label>
								    <input type="date" class="form-control" id="" aria-describedby="emailHelp" >
								</div>
								<input type="submit" class="btn btn-primary pull-right" value="Copy Data">
							</div>
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
										<th>AssetID</th>
										<th>Installation</th>
										<th>PrimaryIP</th>
										<th>PSA</th>
										<th>SecondaryIP</th>
										<th>PSB</th>
										<th>Replication</th>
										<th>Remarks1</th>
										<th>B/M-IP</th>
										<th>B/M</th>
										<th>CSCPC-IP</th>
										<th>CS</th>
										<th>LeasedLineIP</th>
										<th>LeasedLine</th>
									</tr>
								</thead>
								<tbody>
									@foreach($drilling as $drillings)
									<tr>
										<td><a href="{{ route('scadadrilling.edit', $drillings->asset_id) }}">
											{{ $drillings->asset_id }}</a></td>
										<td><a href="{{ route('scadadrilling.show', $drillings->asset_id) }}">
											{{ $drillings->subAsset }}</a></td>
										<td>{{ $drillings->primary_ip }}</td>
										<td>PSA</td>
										<td>{{ $drillings->secondary_ip }}</td>
										<td>PSB</td>
										<td>{{ $drillings->secondary_status }}</td>
										<td>RRRR</td>
										<td>{{ $drillings->BWA_IP }}</td>
										<td>{{ $drillings->BWA_status }}</td>
										<td>{{ $drillings->VSAT_IP }}</td>
										<td>{{ $drillings->VSATStatus }}</td>
										<td>{{ $drillings->LeasedLineIP }}</td>
										<td>{{ $drillings->LeasedLineStatus }}</td>
										
									</tr>
									@endforeach
									
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