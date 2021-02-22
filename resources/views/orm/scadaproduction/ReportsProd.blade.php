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
						<h3 style="padding-left: 10px; font-weight: 600;">Production SCADA Server Status :ReportsProd</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>

					<div class="panel-body">
						<form action="{{ route('production.reports') }}" method="post">
							@csrf
							<div class="col-md-6">
								<div class="form-group">
								    <label for="date">Select From-Date (Down Arrow at Right)</label>
								    <input type="date" name="date" id="LocalReportDate" class="form-control" required autofocus>
								    <small id="" class="form-text text-muted">*From-Date is required</small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="selectlocation">Select Location from the List</label>
				    			    <select class="form-control" id="location" name="location">
				                        <option>All</option>
				                        @foreach($asset as $assets)
				                        <option value="{{ $assets->asset}}" data-id="{{ $assets->id}}">{{ $assets->asset }}</option>
				                        @endforeach
				                    </select>
								  </div>
							</div>
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6 text-right">
								<button type="submit" id="LocalReportSubmit" class="btn btn-primary">Submit</button> 
						</form>
						
					</div>
					
				</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@endsection