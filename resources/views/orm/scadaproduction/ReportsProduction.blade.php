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
	.toptip {
	    text-decoration: none;
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
					Search results of 
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
						@if(count($ProdData) == 0)
						<div class="panel-heading">
							<h3 class="panel-title"> 
								No Data found, check your inputs.
							</h3>
						</div>
						@else
						
						<div class="col-md-6">
							<a href="#" class="btn btn-default" style="margin:10px 10px;">Export to Excel</a>
						</div>
						<!-- 
						<div class="panel-heading">
							<h3 class="panel-title">Bordered Table</h3>
						</div> -->
						<br>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead  class="thead-light">
									<tr>
						                <th scope="col">S.N.</th>
						                <th scope="col">Asset</th>
						                <th scope="col">Installation</th>
						                <th scope="col">PSA</th>
						                <th scope="col">PSB</th>
						                <th scope="col">REPC</th>
						                <th scope="col">Remarks</th>
						                <th scope="col">B/M</th>
						                <th scope="col">C-SC</th>
						                <th scope="col">LL.</th>
						                <th scope="col">GWy.</th>
						                <th scope="col">Ku.</th>
						                <th scope="col">Remarks</th>
						                <th scope="col">Date</th>
						                <th scope="col">UpdatedBy</th>
						            </tr>
								</thead>
								<tbody>
@foreach($ProdData as $ProdDataLocal)
	<tr>
		<td>{{ $loop->index + 1 }}</td>
		<td>{{ $ProdDataLocal->asset }}</td>
		<td>{{ $ProdDataLocal->subAsset }}</td>

		<td 
			@php 
				$psa = $ProdDataLocal->primary_status;
				$psaclass = isset($styles[$psa]) ? $styles[$psa] : null;
			@endphp
			class="{{ $psaclass }}" 
		>
			{{ $ProdDataLocal->primary_status }}
		</td>
		<td
			@php 
				$psb = $ProdDataLocal->secondary_status;
				$classpsb = isset($styles[$psb]) ? $styles[$psb] : null;
			@endphp
			class="{{ $classpsb}}" 
		>{{ $ProdDataLocal->secondary_status }}</td>
		<td
			@php 
				$rps = $ProdDataLocal->replication_status;
				$classrps = isset($styles[$psb]) ? $styles[$psb] : null;
			@endphp
			class="{{ $classrps }}"
		>{{ $ProdDataLocal->replication_status }}</td>
		
		<td
			@php 
				$rem_style = empty($ProdDataLocal->remarks1) ? '' : 'btn btn-sm btn-danger';

			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $ProdDataLocal->remarks1 }}">Remarks1</button>
		</td>

		<td
			@php 
				$bwa = $ProdDataLocal->BWA_status;
				$BWA_status = isset($styles[$bwa]) ? $styles[$bwa] : null;
			@endphp
			class="{{ $BWA_status }}"
		>{{ $ProdDataLocal->BWA_status }}</td>{{-- B/M --}}

		<td
			@php 
				$VAST = $ProdDataLocal->VAST_status;
				$C_SC = isset($styles[$VAST]) ? $styles[$VAST] : null;
			@endphp
			class="{{ $C_SC }}"
		>{{ $ProdDataLocal->VAST_status }}</td>{{-- CSP --}}

		<td
			@php 
				$LL = $ProdDataLocal->LL_status;
				$LL_status = isset($styles[$LL]) ? $styles[$LL] : null;
			@endphp
			class="{{ $LL_status }}"
		>{{ $ProdDataLocal->LL_status }}</td>

		<td
			@php 
				$bwa = $ProdDataLocal->switch_status;
				$switch_status = isset($styles[$bwa]) ? $styles[$bwa] : null;
			@endphp
			class="{{ $switch_status }}"
		>{{ $ProdDataLocal->switch_status }}</td>{{-- GWay --}}

		<td
			@php 
				$bwa = $ProdDataLocal->others_status;
				$others_status = isset($styles[$bwa]) ? $styles[$bwa] : null;
			@endphp
			class="{{ $others_status }}"
		>{{ $ProdDataLocal->others_status }}</td>{{-- Ku --}}


		<td
			@php 
				$rem_style = empty($ProdDataLocal->remarks2) ? '' : 'btn btn-sm btn-danger';
			@endphp
		>
		    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $ProdDataLocal->remarks2 }}">Remarks2</button>
		</td>

		<td>{{ $ProdDataLocal->created_at }}</td>
		<td>{{ $ProdDataLocal->updated_at }}</td>
		
	</tr>
@endforeach

<thead>
	<tr>
		<th>TOTAL</th>
		<td colspan="2"></td>
		<td>{{ $total[0] }}</td>
		<td>{{ $total[1] }}</td>
		<td>{{ $total[2] }}</td>
		<td></td>
		<td>{{ $total[3] }}</td>
		<td>{{ $total[4] }}</td>
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
		<td>{{ $ok[2] }}</td>
		<td></td>
		<td>{{ $ok[3] }}</td>
		<td>{{ $ok[4] }}</td>
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
