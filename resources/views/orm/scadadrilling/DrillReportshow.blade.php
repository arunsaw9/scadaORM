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
	    background-color:#0056b3;
	    padding: 5px 10px;
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
						<h3 style="padding-left: 10px;">
					LocalDrillReport results of 
					Date: <label for="date">{{ $date_loc['date'] }}</label> and 
					Location: <label for="date">{{ $date_loc['location'] }}</label>
						</h3>
						<div class="right">
						
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					
				</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<!-- BORDERED TABLE -->
					<div class="panel table-responsive">
						@if(count($drillReports) == 0)
						<div class="panel-heading">
							<h3 class="panel-title"> 
								No Data found, check your inputs.
							</h3>
						</div>
						@else
						
						
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
						            	<th>S.N.</td>
			                            <th scope="col">Asset</th>
			                            <th scope="col">RIG-ID..</th>
			                            <th scope="col">WITS</th>
			                            <th scope="col">RigSn</th>
			                            <th scope="col">Remarks.</th>
			                            <th scope="col">DSA</th>
			                            <th scope="col">DSB</th>
			                            <th scope="col">Repl</th>
			                            <th scope="col">Remarks.</th>
			                            <th scope="col">BWA</th>
			                            <th scope="col">VSAT</th>
			                            <th scope="col">GWay</th>
			                            <th scope="col">Remarks</th>
			                            <th scope="col">Dated..</th>
			                            <th scope="col">UpdatedBy</th>
			                            <th></th>
			                        </tr>
								</thead>
								<tbody>
@foreach($drillReports as $drillReport)
	<tr>
		<td>{{ $loop->index + 1 }}</td>
		<td>{{ $drillReport->asset }}</td>
		<td>{{ $drillReport->subAsset }}</td>

		<td 
			@php 
				$WITS = $drillReport->WITSML_STATUS;
				$WITSclass = isset($styles[$WITS]) ? $styles[$WITS] : null;
			@endphp
			class="{{ $WITSclass }}" 
		>
			{{ $drillReport->WITSML_STATUS }}
		</td>

		<td
			@php 
				$RigSens = $drillReport->MDTOTCO_STATUS;
				$classrps = isset($styles[$RigSens]) ? $styles[$RigSens] : null;
			@endphp
			class="{{ $classrps }}"
		>{{ $drillReport->MDTOTCO_STATUS }}</td>{{-- RigSens --}} 

		<td
			@php 
				$rem_style = empty($drillReport->REMARKS1) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillReport->REMARKS1 }}">Remarks1</button>
		</td>




		<td
			@php 
				$DSA = $drillReport->DSA_STATUS;
				$DSA_STATUS = isset($styles[$DSA]) ? $styles[$DSA] : null;
			@endphp
			class="{{ $DSA_STATUS }}"
		>{{ $drillReport->DSA_STATUS }}</td>{{-- DSA --}}

		<td
			@php 
				$DSB = $drillReport->DSB_STATUS;
				$DSB_STATUS = isset($styles[$DSB]) ? $styles[$DSB] : null;
			@endphp
			class="{{ $DSB_STATUS }}"
		>{{ $drillReport->DSB_STATUS }}</td>{{-- DSB --}}

		<td
			@php 
				$Repl = $drillReport->REPLICATION_STATUS;
				$REPLICATION_STATUS = isset($styles[$Repl]) ? $styles[$Repl] : null;
			@endphp
			class="{{ $REPLICATION_STATUS }}"
		>{{ $drillReport->REPLICATION_STATUS }}</td>{{-- Repl --}}

		<td
			@php 
				$rem_style = empty($drillReport->REMARKS2) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillReport->REMARKS2 }}">Remarks2</button>
		</td>
		<td
			@php 
				$bwa = $drillReport->BWA_STATUS;
				$BWA_STATUS = isset($styles[$bwa]) ? $styles[$bwa] : null;
			@endphp
			class="{{ $BWA_STATUS }}"
		>{{ $drillReport->BWA_STATUS }}</td>{{-- BWA --}}

		<td
			@php 
				$VST = $drillReport->VSAT_STATUS;
				$VSAT_STATUS = isset($styles[$VST]) ? $styles[$VST] : null;
			@endphp
			class="{{ $VSAT_STATUS }}"
		>{{ $drillReport->VSAT_STATUS }}</td>{{-- VST --}}

		<td
			@php 
				$GWy = $drillReport->GATEWAY_STATUS;
				$GATEWAY_STATUS = isset($styles[$GWy]) ? $styles[$GWy] : null;
			@endphp
			class="{{ $GATEWAY_STATUS }}"
		>{{ $drillReport->GATEWAY_STATUS }}</td>{{-- GWy --}}
		

		<td
			@php 
				$rem_style = empty($drillReport->REMARKS3) ? 'btn btn-sm btn-link btn-danger' : '';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $drillReport->REMARKS3 }}">Remarks3</button>
		</td>

		<td>{{ $drillReport->created_at }}</td>
		<td>{{ $drillReport->updated_by }}</td>
		
	</tr>
@endforeach
<thead>
	<tr>
		<th>TOTAL</th>
		<td colspan="2"></td>
		<td>{{ $total[0] }}</td>
		<td>{{ $total[1] }}</td>
		<td></td>
		<td>{{ $total[2] }}</td>
		<td>{{ $total[3] }}</td>
		<td>{{ $total[4] }}</td>
		<td></td>
		<td>{{ $total[5] }}</td>
		<td>{{ $total[6] }}</td>
		<td>{{ $total[7] }}</td>
	</tr>
</thead>
<thead>
	<tr>
		<th>OK</th>
		<td colspan="2"></td>
		<td>{{ $ok[0] }}</td>
		<td>{{ $ok[1] }}</td>
		<td></td>
		<td>{{ $ok[2] }}</td>
		<td>{{ $ok[3] }}</td>
		<td>{{ $ok[4] }}</td>
		<td></td>
		<td>{{ $ok[5] }}</td>
		<td>{{ $ok[6] }}</td>
		<td>{{ $ok[7] }}</td>
	</tr>
</thead>

								</tbody>
							</table>
						</div>
						@endif
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