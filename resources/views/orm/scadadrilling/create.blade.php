@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Drilling Server Data Entry Sheet</h3>
					@include('orm.includes.error')
					
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('scadadrilling.store') }}" method="post">
						@csrf

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">Asset</label>
								    <select class="form-control" name="dril_asset_id" id="dril_asset_id">
					                   	@foreach($asset as $assets)
					                    <option value="{{ $assets->asset}}" data-id="{{ $assets->id}}">{{ $assets->asset }}</option>
					                    @endforeach
					                </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="drilsubasset" style="margin-left: 1%;">Location</label>
								    <select class="form-control" name="drilsubasset" id="drilsubasset" required autofocus >
					                    
					                </select>
								</div>
							</div>
						</div>

						

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">DSA IP</label>
								    <input type="text" name="DSA_IP" class="form-control" placeholder="DSA IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">DSA-Status</label>
								    <select class="form-control" name="DSA_Status" id="DSA_Status">
					                    <option>OK</option>
					                    <option>NOK</option>
					                    <option>NW</option>
					                    <option>OFF</option>
					                    <option>NA</option>
					                </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">DSB IP</label>
								    <input type="text" name="DSB_ip" class="form-control" placeholder="DSB IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="degination" style="margin-left: 1%;">DSB-Status</label>
								    <select class="form-control" name="DSB_Status" id="DSB_Status">
					                    <option>OK</option>
					                    <option>NOK</option>
					                    <option>NW</option>
					                    <option>OFF</option>
					                    <option>NA</option>
					                </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">WITSML IP</label>
								    <input type="text" name="WITSML_ip" class="form-control" placeholder="WITSML IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="Location_ID" style="margin-left: 1%;">WITSML-Status</label>
								    <select class="form-control" name="WITSML_LineStatus" id="WITSML_LineStatus">
					                    <option>OK</option>
					                    <option>NOK</option>
					                    <option>NW</option>
					                    <option>OFF</option>
					                    <option>NA</option>
					                </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" style="margin-left: 1%;">MDTOTCO IP</label>
								    <input type="text" name="MDTOTCO_ip" class="form-control" placeholder="MDTOTCO IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" style="margin-left: 1%;">MDTOTCO-Status</label>
								    <select class="form-control" name="MDTOTCO_Status" id="MDTOTCO_Status">
				                        <option>OK</option>
				                        <option>NOK</option>
				                        <option>NW</option>
				                        <option>OFF</option>
				                        <option>NA</option>
				                    </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" style="margin-left: 1%;">BWA IP</label>
								    <input type="text" name="BWA_ip" class="form-control" placeholder="BWA IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" style="margin-left: 1%;">BWA-Status</label>
								    <select class="form-control" name="BWA_Status" id="BWA_Status">
				                        <option>OK</option>
				                        <option>NOK</option>
				                        <option>NW</option>
				                        <option>OFF</option>
				                        <option>NA</option>
				                    </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" style="margin-left: 1%;">VSAT IP</label>
								    <input type="text" name="VSAT_ip" class="form-control" placeholder="VSAT IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" style="margin-left: 1%;">VSAT-Status</label>
								    <select class="form-control" name="VSAT_Status" id="VSAT_Status">
				                        <option>OK</option>
				                        <option>NOK</option>
				                        <option>NW</option>
				                        <option>OFF</option>
				                        <option>NA</option>
				                    </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" style="margin-left: 1%;">GATEWAY IP</label>
								    <input type="text" name="GATEWAY_ip" class="form-control" placeholder="GATEWAY IP" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" style="margin-left: 1%;">GATEWAY-Status</label>
								    <select class="form-control" name="GATEWAY_Status" id="GATEWAY_Status">
				                        <option>OK</option>
				                        <option>NOK</option>
				                        <option>NW</option>
				                        <option>OFF</option>
				                        <option>NA</option>
				                    </select>
								</div>
							</div>
						</div>

						

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="role" style="margin-left: 1%;">REPL-Status</label>
								    <select class="form-control" name="REPL_Status" id="REPL_Status">
				                        <option>OK</option>
				                        <option>NOK</option>
				                        <option>NW</option>
				                        <option>OFF</option>
				                        <option>NA</option>
				                    </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="authorised" style="margin-left: 1%;">Remarks1</label>
								    <select class="form-control" name="remarks1" id="remarks1" >
				                        <option value="" selected="">No Selection</option>
				                        <option>Raw Power Failure</option>
				                        <option>UPS Failure</option>
				                        <option>Battery Bank Issue</option>
				                        <option>AC Not Working</option>
				                        <option>Gateway Failure</option>
				                        <option>Comm. Failure</option>
				                        <option>PSA not Working</option>
				                        <option>PSB not Working</option>
				                        <option>PSA &amp; PSB not Working</option>
				                        <option>SCADA Failure</option>
				                        <option>SCADA Server Hanged</option>
				                        <option>SCADA Repl.Failure</option>
				                        <option>Others </option>
				                    </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="authorised" style="margin-left: 1%;">Remarks2</label>
								    <select class="form-control" name="remarks2" id="remarks2" >
				                        <option value="" selected="">No Selection</option>
				                        <option>Raw Power Failure</option>
				                        <option>UPS Failure</option>
				                        <option>Battery Bank Issue</option>
				                        <option>AC Not Working</option>
				                        <option>Gateway Failure</option>
				                        <option>Comm. Failure</option>
				                        <option>PSA not Working</option>
				                        <option>PSB not Working</option>
				                        <option>PSA &amp; PSB not Working</option>
				                        <option>SCADA Failure</option>
				                        <option>SCADA Server Hanged</option>
				                        <option>SCADA Repl.Failure</option>
				                        <option>Others </option>
				                    </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="password" style="margin-left: 1%;">Remarks3</label>
								    <select class="form-control" name="remarks3" id="remarks3" >
				                        <option value="" selected="">No Selection</option>
				                        <option>Lease-line Issue</option>
				                        <option>BWA Issue</option>
				                        <option>VSAT Issue</option>
				                        <option>SCADA Failure</option>
				                        <option>Gateway Issue</option>
				                        <option>Raw Power Failure</option>
				                        <option>UPS Failure</option>
				                        <option>Battery Bank Issue</option>
				                        <option>AC Not Working</option>
				                        <option>Others--&gt; </option>
				                    </select>
								</div>
							</div>
						</div>

						
						<div class="row">
							<div class="col-md-4 col-md-offset-8">
								<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scriptsection')

@endsection