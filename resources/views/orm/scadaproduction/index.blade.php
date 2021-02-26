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
						<h3 style="padding-left: 10px; font-weight: 600;">Production Server Status Data : ProdScadaRev</h3>
						@include('orm.includes.error')
						<a href="{{ route('scadaproduction.create') }}" class="btn btn-info pull-right">CREATE</a>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
						</div>
					</div>
					<hr>

					<div class="panel-body">
						<form action="{{ route('previous.data') }}" method="post">
							@csrf
							<div class="col-md-6" style=" border-right: 1px solid #ccc;">
								<div class="form-group">
								    <label for="selectdatefordata">Select Date to View Previous Data</label>
								    <input type="date" name="Previous_Date" class="form-control">
								</div>
								<input type="submit" class="btn btn-primary pull-right" value="View Data">
							</div>
						</form>

						<form action="{{ route('copy.data') }}" method="post">
							@csrf
							<div class="col-md-6">
								<div class="form-group">
								    <label for="copytodata">Select Date to Copy Data</label>
								     <input type="date" name="copy_data" class="form-control">
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
						<!-- 
						<div class="panel-heading">
							<h3 class="panel-title">Bordered Table</h3>
						</div> -->
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
				<th>UpdatedBy</th>
			</tr>
		</thead>
		<tbody>
			@foreach($s_production as $s_productions)
			<tr>
				<td>{{ $loop->index + 1 }}</td>
				<td><a href="{{ route('scadaproduction.edit', $s_productions->id) }}">{{ $s_productions->asset }}</a></td>

				<td>{{ $s_productions->subAsset }}</td>
				<td>{{ $s_productions->primary_ip }}</td>
				<td 
					@php 
						$psa = $s_productions->primary_status;
						$psaclass = isset($styles[$psa]) ? $styles[$psa] : null;
					@endphp
					class="{{ $psaclass }}" 
				>
					{{ $s_productions->primary_status }}
				</td>
				<td>{{ $s_productions->secondary_ip }}</td>
				<td
					@php 
						$psb = $s_productions->secondary_status;
						$classpsb = isset($styles[$psb]) ? $styles[$psb] : null;
					@endphp
					class="{{ $classpsb}}" 
				>{{ $s_productions->secondary_status }}</td>
				<td
					@php 
						$rps = $s_productions->replication_status;
						$classrps = isset($styles[$rps]) ? $styles[$rps] : null;
					@endphp
					class="{{ $classrps }}"
				>{{ $s_productions->replication_status }}</td>
				
				<td
					@php 
						$rem_style = empty($s_productions->remarks1) ? 'btn btn-sm btn-link btn-danger' : '';

					@endphp
				>
				
				    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $s_productions->remarks1 }}">Remarks1</button>

				</td>
				<td	>{{ $s_productions->BWA_IP }}</td>	{{-- B/M-IP --}}

				<td
					@php 
						$bwa = $s_productions->BWA_status;
						$BWA_status = isset($styles[$bwa]) ? $styles[$bwa] : null;
					@endphp
					class="{{ $BWA_status }}"
				>{{ $s_productions->BWA_status }}</td>{{-- B/M --}}

				<td>{{ $s_productions->VAST_IP }}</td>{{-- CSCPC-IP --}}
				<td
					@php 
						$vast = $s_productions->VAST_status;
						$class_vast = isset($styles[$vast]) ? $styles[$vast] : null;
					@endphp
					class="{{ $class_vast }}"
				>{{ $s_productions->VAST_status }}</td>{{-- CS --}}

				<td>{{ $s_productions->LL_IP }}</td>
				<td
					@php 
						$LL = $s_productions->LL_status;
						$class_LL = isset($styles[$LL]) ? $styles[$LL] : null;
					@endphp
					class="{{ $class_LL }}"
				>{{ $s_productions->LL_status }}</td>




				<td>{{ $s_productions->switch_IP }}</td>
				<td
					@php 
						$switch = $s_productions->switch_status;
						$class_switch = isset($styles[$switch]) ? $styles[$switch] : null;
					@endphp
					class="{{ $class_switch }}"
				>{{ $s_productions->switch_status }}</td>


				<td>{{ $s_productions->others_IP }}</td>
				<td
					@php 
						$others = $s_productions->others_status;
						$class_others = isset($styles[$others]) ? $styles[$others] : null;
					@endphp
					class="{{ $class_others }}"
				>{{ $s_productions->others_status }}</td>
				

				<td
					@php 
						$rem_style = empty($s_productions->remarks1) ? '' : 'btn btn-sm btn-danger';
					@endphp
				>
				    <button type="button" data-toggle="tooltip" class="toptip {{ $rem_style }}"  title="{{ $s_productions->remarks1 }}">Remarks1</button>

				</td>
				<td>
					{{ $s_productions->updated_at }}
					<span class="created" id="{{ $drillings->created_at }}" ></span>
				</td>

				<td class="users">
					<span class="tdcls" id="{{ $s_productions->updated_by }}" style="cursor: pointer;">User</span>
					<input type="hidden" value="flagmark" id="production">
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

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content modal-lg-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Users CPF</h4>
        </div>
        <div class="modal-body">
        	<table class="table table-bordered table-responsive">
				<thead  class="thead-light">
					<tr>
						<td class="text-center">First</td>
						<td class="text-center">Second</td>
						<td class="text-center">Third</td>
					</tr>
					<tr class="scadacpf">
						
					</tr>
				</thead>
			</table>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> --}}
      </div>
      
    </div>
  </div>

@endsection

@section('scriptsection')
<script type="text/javascript">
    $(document).ready(function(){
        $("[data-toggle=tooltip]").tooltip();
    });
</script>
@endsection

