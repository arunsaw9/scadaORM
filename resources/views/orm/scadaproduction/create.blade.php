@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Production Server Status Data Entry Sheet</h3>
					@include('orm.includes.error')
					{{-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> --}}
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('scadaproduction.store') }}" method="post">
						@csrf

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">PrimaryIP</label>
								    <input type="text" name="PrimaryIP" class="form-control" placeholder="PrimaryIP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">SecondaryIP</label>
								    <input type="text" name="SecondaryIP" class="form-control" placeholder="SecondaryIP">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">ReplicationT1T2</label>
								    <input type="text" name="ReplicationT1T2" class="form-control" placeholder="ReplicationT1T2">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">BWA/MW-IP</label>
								    <input type="text" name="BWA_IP" class="form-control" placeholder="BWA/MW_IP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">C-SCPC-IP</label>
								    <input type="text" name="VSAT_IP" class="form-control" placeholder="C-SCPC-IP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">LeasedLineIP</label>
								    <input type="text" name="LeasedLineIP" class="form-control" placeholder="LeasedLineIP">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">GatewayIP</label>
								    <input type="text" name="SwitchIP" class="form-control" placeholder="GatewayIP">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">KuIP</label>
								    <input type="text" name="OthersIP" class="form-control" placeholder="KuIP">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">Asset</label>
								    <select class="form-control" name="asset" id="asset_id">
					                   	@foreach($asset as $assets)
					                    <option value="{{ $assets->asset}}" data-id="{{ $assets->id}}">{{ $assets->asset }}</option>
					                    @endforeach
					                </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">Instalation</label>
								    <select class="form-control" name="subasset" id="subasset">
					                    
					                </select>
								</div>
							</div>
						</div>

						

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">Primary-Status</label>
								    <select class="form-control" name="PrimaryStatus" id="PrimaryStatus">
					                    <option>OK</option>
					                    <option>NOK</option>
					                    <option>NW</option>
					                    <option>OFF</option>
					                    <option value="NA">NA</option>
					                </select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">Secondary-Status</label>
								    <select class="form-control" name="SecondaryStatus" id="SecondaryStatus">
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
								    <label for="CPFNO" style="margin-left: 1%;" >Replication-Status</label>
								    <select class="form-control" name="ReplicationStatus" id="ReplicationStatus">
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
								    <label for="degination" style="margin-left: 1%;">BWA/MW-Status</label>
								    <select class="form-control" name="BWAStatus" id="BWAStatus">
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
								    <label for="section" style="margin-left: 1%;">C-SCPC-Status</label>
								    <select class="form-control" name="VSATStatus" id="VSATStatus">
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
								    <label for="Location_ID" style="margin-left: 1%;">LeasedLine-Status</label>
								    <select class="form-control" name="LeasedLineStatus" id="LeasedLineStatus">
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
									<label for="Location" style="margin-left: 1%;">Gateway-Status</label>
									<select class="form-control" name="SwitchStatus" id="SwitchStatus">
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
								    <label for="role" style="margin-left: 1%;">Ku-Status</label>
								    <select class="form-control" name="OthersStatus" id="OthersStatus">
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
								    <label for="authorised" style="margin-left: 1%;">Remarks for PSA, PSB & Replication</label>
								    <select class="form-control" name="remarks1" id="remarks1">
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
								    <label for="password" style="margin-left: 1%;">Remarks for BWA/MW, C-SCPC, L-L, Gateway, Ku</label>
								    <select class="form-control" name="remarks2" id="remarks2" >
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