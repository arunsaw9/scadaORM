@extends('orm.layouts.app')

@section('main')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Production Server Status Data Entry Sheet</h3>
					@if(\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{!! \Session::get('success') !!}</li>
							</ul>
						</div>
					@endif

					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					{{-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> --}}
				</div>
				<hr>
				<div class="panel-body">
					<form action="{{ route('scadadrilling.update', $edits->id) }}" method="post">
						@csrf
						{{ method_field('PUT') }}
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">RigId</label>
								    <input type="text" disabled name="RigId" class="form-control" placeholder="RigId">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="WitsMlIP" style="margin-left: 1%;">WitsMlIP</label>
								    <input type="text" disabled name="WitsMlIP" class="form-control" placeholder="WitsMlIP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="email" style="margin-left: 1%;">RigSenseIP</label>
								    <input type="text" disabled name="MDTotcoIP" class="form-control" placeholder="RigSenseIP">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">PrimaryIP</label>
								    <input type="text" disabled name="PrimaryIP" class="form-control" placeholder="PrimaryIP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="ip" style="margin-left: 1%;">SecondaryIP</label>
								    <input type="text" disabled name="SecondaryIP" class="form-control" placeholder="SecondaryIP">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
								    <label for="ip" style="margin-left: 1%;">ReplicationT1T2</label>
								    <input type="text" disabled name="ReplicationT1T2" class="form-control" placeholder="ReplicationT1T2">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">BwaIP</label>
								    <input type="text" disabled name="BwaIP" class="form-control" placeholder="BwaIP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="ip" style="margin-left: 1%;">VsatIP</label>
								    <input type="text" disabled name="VsatIP" class="form-control" placeholder="VsatIP">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
								    <label for="ip" style="margin-left: 1%;">GatewayIP</label>
								    <input type="text" disabled name="GatewayIP" class="form-control" placeholder="GatewayIP">
								</div>
							</div>
						</div>

						

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								    <label for="name" style="margin-left: 1%;">Asset</label>
								    <input type="text" disabled name="Asset" class="form-control" placeholder="GatewayIP">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								    <label for="inst" style="margin-left: 1%;">Instalation</label>
								    <input type="text" disabled name="Instalation" class="form-control" placeholder="Instalation">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="" style="margin-left: 1%;"></label>
									<strong><p class="text-danger">NOK= Not-OK, OFF= Power-Off, NA= Not-Applicable </p></strong>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								    <label for="section" style="margin-left: 1%;">WITSML-Status</label>
								    <select class="form-control" name="WitsMlStatus" id="WitsMlStatus" disabled>
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
								    <label for="Location_ID" style="margin-left: 1%;">RigSense-Status</label>
								    <select class="form-control" name="MDTotcoStatus" id="" disabled>
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
								    <label for="degination" style="margin-left: 1%;">BWA-Status</label>
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
									<label for="Location" style="margin-left: 1%;">Gateway-Status</label>
									<select class="form-control" name="GatewayStatus" id="SwitchStatus">
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
								    <label for="role" style="margin-left: 1%;">VSAT-Status</label>
								    <select class="form-control" name="VsatStatus" id="VsatStatus">
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
							<div class="col-md-4">
								<div class="form-group">
					                <label for="remarks1"><strong>Remarks for DSA, DSB &amp; Replication</strong></label>
					                <select class="form-control" name="remarks1[]" id="remarks1" multiple="">
					                    <option value="" selected="">No Selection</option>
					                    <option>Drilling Complete</option>
					                    <option>Rig down</option>
					                    <option>Rig Building</option>
					                    <option>Rig under Transport</option>
					                    <option>Production Testing</option>
					                    <option>No Data from WITSML Server</option>
					                    <option>SCADA Server Hanged</option>
					                    <option>SCADA Repl.Failure</option>
					                    <option>Gateway Issue</option>
					                    <option>VSAT Issue</option>
					                    <option>VSAT Installation under progress</option>
					                    <option>BWA Issue</option>
					                    <option>Raw Power Failure</option>
					                    <option>UPS Failure</option>
					                    <option>Battery Bank Issue</option>
					                    <option>AC Not Working</option>
					                    <option>Rig Under Stand-by</option>
					                    <option>Rig Under Capital Repair</option>
					                    <option>Others--&gt; </option>
					                </select>
					                <small> Press <b>Ctrl</b> to select multiple Options</small>
					            </div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
					            <label for="remarks2"><strong>Remarks for BWA, VSAT &amp; Gateway</strong></label>
					            <select class="form-control" name="remarks2[]" id="remarks2" multiple="">
					                    <option value="" selected="">No Selection</option>
					                    <option>Raw Power Failure</option>
					                    <option>UPS Failure</option>
					                    <option>Battery Bank Issue</option>
					                    <option>AC Not Working</option>
					                    <option>BWA Issue</option>
					                    <option>VSAT Issue</option>
					                    <option>SCADA Issue</option>
					                    <option>Gateway Issue</option>
					                    <option>Others--&gt; </option>
					                </select>
					                <small> Press <b>Ctrl</b> to select multiple Options</small>
					            </div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
					                <label for="remarks3"><strong>Remarks for Rig-Sense &amp; WitsML Servers</strong></label>
					                <select class="form-control" name="remarks3[]" id="remarks3" multiple="">
					                    <option value="" selected="">No Selection</option>
					                    <option>Rig-Sense Srv not Working</option>
					                    <option>WitsML Srv not Working</option>
					                    <option>Rig-Sense &amp; WitsMl not Working</option>
					                    <option>Raw Power Failure</option>
					                    <option>UPS Failure</option>
					                    <option>Battery Bank Issue</option>
					                    <option>AC Not Working</option>
					                    <option>Rig Under Stand-by</option>
					                    <option>Rig Under Capital Repair</option>
					                    <option>Drilling in Progress</option>
					                    <option>Rig Dismantling</option>
					                    <option>Drilling Complete</option>
					                    <option>Rig Move</option>
					                    <option>Rig Building</option>
					                    <option>Production Testing</option>
					                    <option>Operations Shutdown</option>
					                    <option>Maintenance Shutdown</option>
					                    <option>Drilling Complication</option>
					                    <option>Others--&gt; </option>
					                </select>
					                <small> Press <b>Ctrl</b> to select multiple Options</small>
					            </div>
							</div>
							
						</div>

						<input type="hidden" name="created_at" value="{{ $edits->created_at }}">
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