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
	    background-color:brown;
	    padding: 10px 20px;
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
						<h3 style="padding-left: 10px; font-weight: 600;">
							Drilling results of Date : <strong>{{ $search['date'] }}</strong> 
						</h3> 
						@include('orm.includes.error')
						
						<div class="right">
							<a href="{{ route('scadadrilling.index') }}" class="btn btn-info pull-right">Back</a>
						</div>
					</div>

				</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<!-- BORDERED TABLE -->
					<div class="panel table-responsive">
						<!-- <div class="col-md-6">
							<a href="#" class="btn btn-default" style="margin:10px 10px;">Export to Excel</a>
						</div> -->
						<!-- 
						<div class="panel-heading">
							<h3 class="panel-title">Bordered Table</h3>
						</div> -->
						<br>
						<div class="panel-body">
							<table class="table table-bordered table-responsive">
								<thead  class="thead-light">
									<tr>
									      <th colspan="3"></th>
									      <td class="text-center" colspan="3">Instrumentation</td>
									      <td class="text-center" colspan="4">OT remarks</td>
									      <td class="text-center" colspan="4"> Communication</td>
									</tr>
									<tr>
										<th>S.N</th>
										<th>Asset</th>
										<th>RIG-ID.No</th>
										<th>WITS</th>
										<th>RigSn</th>
										<th>Remarks1</th>
										<th>DSA</th>
										<th>DSB</th>
										<th>Repl</th>
										<th>Remarks2</th>
										<th>BWA</th>
										<th>VST</th>
										<th>GWy</th>
										<th>Remarks3</th>
										<th>Date</th>
										<th>UpdatedBy</th>
									</tr>
								</thead>
						<tbody>

	@foreach($searchresults as $searchresult)
	<tr>
		<td>{{ $loop->index + 1 }}</td>
		<td><a href="{{ route('scadadrilling.edit', $searchresult->id) }}">{{ $searchresult->asset }}</a></td>
		<td>{{ $searchresult->subAsset }}</td>

		<td
			@php 
				$psb = $searchresult->WITSML_STATUS;
				$classrps = isset($styles[$psb]) ? $styles[$psb] : null;
			@endphp
			class="{{ $classrps }}"
		>{{ $searchresult->WITSML_STATUS }}</td>

		<td>RigSn</td>
		<td
			@php 
				$rem_style = empty($searchresult->REMARKS1) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $searchresult->REMARKS1 }}">Remarks1</button>
		</td>
		<td
			@php 
				$dsa = $searchresult->DSA_STATUS;
				$classdsa = isset($styles[$dsa]) ? $styles[$dsa] : null;
			@endphp
			class="{{ $classdsa }}"
		>{{ $searchresult->DSA_STATUS }}</td>
		<td
			@php 
				$dsb = $searchresult->DSB_STATUS;
				$classdsb = isset($styles[$dsb]) ? $styles[$dsb] : null;
			@endphp
			class="{{ $classdsb }}"
		>{{ $searchresult->DSB_STATUS }}</td>
		<td
			@php 
				$Repl = $searchresult->REPLICATION_STATUS;
				$classRepl = isset($styles[$Repl]) ? $styles[$Repl] : null;
			@endphp
			class="{{ $classRepl }}"
		>{{ $searchresult->REPLICATION_STATUS }}</td>
		<td
			@php 
				$rem_style = empty($searchresult->REMARKS2) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $searchresult->REMARKS2 }}">Remarks2</button>
		</td>
		<td
			@php 
				$BWA = $searchresult->BWA_STATUS;
				$classBWA = isset($styles[$BWA]) ? $styles[$BWA] : null;
			@endphp
			class="{{ $classBWA }}"
		>{{ $searchresult->BWA_STATUS }}</td>
		<td
			@php 
				$VSAT = $searchresult->VSAT_STATUS;
				$classVSAT = isset($styles[$VSAT]) ? $styles[$VSAT] : null;
			@endphp
			class="{{ $classVSAT }}"
		>{{ $searchresult->VSAT_STATUS }}</td>
		<td
			@php 
				$gty = $searchresult->GATEWAY_STATUS;
				$classgty = isset($styles[$gty]) ? $styles[$gty] : null;
			@endphp
			class="{{ $classgty }}"
		>{{ $searchresult->GATEWAY_STATUS }}</td>
		<td
			@php 
				$rem_style = empty($searchresult->REMARKS3) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $searchresult->REMARKS3 }}">Remarks3</button>
		</td>
		<td>{{ $searchresult->created_at }}</td>
		<td>{{ $searchresult->updated_by }}</td>
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

