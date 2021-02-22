@extends('orm.layouts.app')

@section('main')
<style>
	.table .thead-light th {
	    color: #495057;
	    background-color: #e9ecef;
	    border-color: #dee2e6;
	}
	.green{background-color: lightgreen;}
	.pink{background-color: pink;}
	.yellow{background-color: lightyellow;}
	.remark{background-color: red}
	.tooltip.top .tooltip-inner {
	    background-color:red;
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
						<h3 style="padding-left: 10px; font-weight: 600;">Drilling SCADA Server Status Reports</h3> : DrillReports
						@include('orm.includes.error')
						<a href="{{ route('scadadrilling.create') }}" class="btn btn-info pull-right">CREATE</a>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>

					


					<div class="panel-body">
						<form action="{{ route('drilreports') }}" method="post">
							@csrf
							<div class="col-md-6" style=" border-right: 1px solid #ccc;">
								<div class="form-group">
								    <label for="selectdatefordata">Select Date to View Previous Data</label>
								    <input type="date" name="dril_date" class="form-control" required autofocus>
								</div>
								<input type="submit" class="btn btn-primary pull-right" value="View Data">
							</div>
						</form>

						<form action="{{ route('drildata.copy') }}" method="post">
							@csrf
							<div class="col-md-6">
								<div class="form-group">
								    <label for="copytodata">Select Date to Copy Data</label>
								     <input type="date" name="copy_data" class="form-control" required autofocus>
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
					<div class="panel table-responsive">
						{{-- <div class="col-md-6">
							<a href="#" class="btn btn-default" style="margin:10px 10px;">Export to Excel</a>
						</div> --}}
						<br>
						<div class="panel-body">
							<table class="table table-bordered table-responsive">
								
								<thead  class="thead-light">
									<tr>
									      <th colspan="3"></th>
									      <td class="text-center" colspan="5">Instrumentation</td>
									      <td class="text-center" colspan="6">OT remarks</td>
									      <td class="text-center" colspan="7"> Communication</td>
									</tr>
									<tr>
						                <th scope="col">S.N.</th>
						                <th scope="col">AssetID</th>
						                <th scope="col">RIG-ID </th>
						                <th scope="col">WITSML-IP</th>
						                <th scope="col">WITSML</th>
						                <th scope="col">RigSn-IP</th>
						                <th scope="col">RigSens</th>
						                <th scope="col">Remarks</th>
						                <th scope="col">DSA-IP</th>
						                <th scope="col">DSA</th>
						                <th scope="col">DSB-IP</th>
						                <th scope="col">DSB</th>
						                <th scope="col">ReplStatus</th>
						                <th scope="col">Remarks</th>
						                <th scope="col">BWA-IP</th>
						                <th scope="col">BWA</th>
						                <th scope="col">VSAT-IP</th>
						                <th scope="col">VSAT</th>
						                <th scope="col">Gateway-IP</th>
						                <th scope="col">Gateway</th>
						                <th scope="col">Remarks</th>
						                <th scope="col">Date</th>
						                <th></th>
						            </tr>
								</thead>
						<tbody>

				@foreach($drilling as $drillings)
				<tr>
					<td>{{ $loop->index + 1 }}</td>
					<td><a href="{{ route('scadadrilling.edit', $drillings->id) }}">{{ $drillings->asset }}</a></td>
					<td>{{ $drillings->subAsset }}</td>

					<td>{{ $drillings->WITSML_IP }}</td>
					<td
						@php 
							$psb = $drillings->WITSML_STATUS;
							$classrps = isset($styles[$psb]) ? $styles[$psb] : null;
						@endphp
						class="{{ $classrps }}"
					>{{ $drillings->WITSML_STATUS }}</td>

					<td>{{ $drillings->MDTOTCO_IP }}</td>{{-- RigSens --}} 
					<td
						@php 
							$psb = $drillings->WITSML_STATUS;
							$classrps = isset($styles[$psb]) ? $styles[$psb] : null;
						@endphp
						class="{{ $classrps }}"
					>{{ $drillings->MDTOTCO_STATUS }}</td>

					<td
						@php 
							$rem_style = empty($drillings->REMARKS1) ? 'btn btn-sm btn-link btn-danger' : '';
						@endphp
					>
					    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillings->REMARKS1 }}">Remarks1</button>
					</td>


					<td>{{ $drillings->DSA_IP }}</td>{{-- DSA_IP --}} 
					<td
						@php 
							$dsa = $drillings->DSA_STATUS;
							$classdsa = isset($styles[$dsa]) ? $styles[$dsa] : null;
						@endphp
						class="{{ $classdsa }}"
					>{{ $drillings->DSA_STATUS }}</td>
					
					<td>{{ $drillings->DSB_IP }}</td>{{-- DSA_IP --}} 
					<td
						@php 
							$dsb = $drillings->DSB_STATUS;
							$classdsb = isset($styles[$dsb]) ? $styles[$dsb] : null;
						@endphp
						class="{{ $classdsb }}"
					>{{ $drillings->DSB_STATUS }}</td>



					<td
						@php 
							$Repl = $drillings->REPLICATION_STATUS;
							$classRepl = isset($styles[$Repl]) ? $styles[$Repl] : null;
						@endphp
						class="{{ $classRepl }}"
					>{{ $drillings->REPLICATION_STATUS }}</td>
					<td
						@php 
							$rem_style = empty($drillings->REMARKS2) ? 'btn btn-sm btn-link btn-danger' : '';
						@endphp
					>
					    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillings->REMARKS2 }}">Remarks2</button>
					</td>


					<td>{{ $drillings->BWA_IP }}</td>{{-- BWA_IP --}} 
					<td
						@php 
							$BWA = $drillings->BWA_STATUS;
							$classBWA = isset($styles[$BWA]) ? $styles[$BWA] : null;
						@endphp
						class="{{ $classBWA }}"
					>{{ $drillings->BWA_STATUS }}</td>

					<td>{{ $drillings->VSAT_IP }}</td>{{-- VSAT_IP --}} 
					<td
						@php 
							$VSAT = $drillings->VSAT_STATUS;
							$classVSAT = isset($styles[$VSAT]) ? $styles[$VSAT] : null;
						@endphp
						class="{{ $classVSAT }}"
					>{{ $drillings->VSAT_STATUS }}</td>

					<td>{{ $drillings->GATEWAY_IP }}</td>{{-- GATEWAY_IP --}} 
					<td
						@php 
							$gty = $drillings->GATEWAY_STATUS;
							$classgty = isset($styles[$gty]) ? $styles[$gty] : null;
						@endphp
						class="{{ $classgty }}"
					>{{ $drillings->GATEWAY_STATUS }}</td>

					<td
						@php 
							$rem_style = empty($drillings->REMARKS3) ? 'btn btn-sm btn-link btn-danger' : '';
						@endphp
					>
					    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillings->REMARKS3 }}">Remarks3</button>
					</td>
					<td>{{ $drillings->created_at }}</td>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("[data-toggle=tooltip]").tooltip();
    });
</script>
@endsection

