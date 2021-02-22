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
						<h3 style="padding-left: 10px;">
					Search results of 
					Date: <label for="date">{{ $date_loc['date'] }}</label> and 
					Location: <label for="date">{{ Auth::user()->ASSET }}</label>
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
						
						<br>
						<div class="panel-body">
							<table class="table table-bordered table-responsive">
								<thead  class="thead-light">
									<tr>
										<th>S.N</th>
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
										<th>Gateway-IP</th>
										<th>Gateway	</th>
										<th>Ku-IP</th>
										<th>Ku</th>
										<th>Remarks2</th>
										<th>UpdationDate</th>
									</tr>
								</thead>
								<tbody>
									@foreach($viewData as $viewdata)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td><a href="{{ route('scadaproduction.edit', $viewdata->id) }}">{{ $viewdata->asset }}</a></td>
										<td><a href="{{ route('scadaproduction.show', $viewdata->id) }}">{{ $viewdata->subAsset }}</a></td>
										<td>{{ $viewdata->primary_ip }}</td>
										<td 
											@php 
												$psa = $viewdata->primary_status;
												$psaclass = isset($styles[$psa]) ? $styles[$psa] : null;
											@endphp
											class="{{ $psaclass }}" 
										>
											{{ $viewdata->primary_status }}
										</td>
										<td>{{ $viewdata->secondary_ip }}</td>
										<td
											@php 
												$psb = $viewdata->secondary_status;
												$classpsb = isset($styles[$psb]) ? $styles[$psb] : null;
											@endphp
											class="{{ $classpsb}}" 
										>{{ $viewdata->secondary_status }}</td>


										<td
											@php 
												$rps = $viewdata->replication_status;
												$classrps = isset($styles[$psb]) ? $styles[$psb] : null;
											@endphp
											class="{{ $classrps }}"
										>{{ $viewdata->replication_status }}</td>
										
										<td
											@php 
												$rem_style = empty($viewdata->remarks1) ? '' : 'btn btn-sm btn-danger';
											@endphp
										>
										    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $viewdata->remarks1 }}">Remarks1</button>

										</td>
										<td	>{{ $viewdata->BWA_IP }}</td>	{{-- B/M-IP --}}
										<td
											@php 
												$bwa = $viewdata->BWA_status;
												$BWA_status = isset($styles[$bwa]) ? $styles[$bwa] : null;
											@endphp
											class="{{ $BWA_status }}"
										>{{ $viewdata->BWA_status }}</td>{{-- B/M --}}
										<td>{{ $viewdata->VAST_IP }}</td>{{-- CSCPC-IP --}}
										<td>{{ $viewdata->VAST_status }}</td>{{-- CS --}}
										<td>{{ $viewdata->LL_IP }}</td>
										<td>{{ $viewdata->LL_status }}</td>


										<td>{{ $viewdata->switch_IP }}</td>
										<td
											@php 
												$switch = $viewdata->switch_status;
												$class_switch = isset($styles[$switch]) ? $styles[$switch] : null;
											@endphp
											class="{{ $class_switch }}"
										>{{ $viewdata->switch_status }}</td>


										<td>{{ $viewdata->others_IP }}</td>
										<td
											@php 
												$others = $viewdata->others_status;
												$class_others = isset($styles[$others]) ? $styles[$others] : null;
											@endphp
											class="{{ $class_others }}"
										>{{ $viewdata->others_status }}</td>
										



										<td
											@php 
												$rem_style = empty($viewdata->remarks1) ? '' : 'btn btn-sm btn-danger';
											@endphp
										>
										    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $viewdata->remarks1 }}">Remarks1</button>

										</td>
										<td>{{ $viewdata->updated_at }}</td>

										
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

