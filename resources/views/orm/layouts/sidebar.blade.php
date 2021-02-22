<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				
    	
	@role('Admin')
	    <li>
	    	<a href="{{ route('scadaproduction.index') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
	    </li>
		<li>
			<a href="#subPages" data-toggle="collapse" class="collapsed">
				<i class="lnr lnr lnr-chart-bars"></i><span>Scada Production</span><i class="icon-submenu lnr lnr-chevron-left"></i>
			</a>
			<div id="subPages" class="collapse">
				<ul class="nav">
					<li><a href="{{route('scadaproduction.index')}}" class="">Production</a></li>
					<li><a href="{{route('LocalReport')}}" class="">Local Reports</a></li>
					<li><a href="{{route('production.reports')}}" class="">Production Reports</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#scadadril" data-toggle="collapse" class="collapsed">
				<i class="lnr lnr-code"></i><span>Scada Drilling</span><i class="icon-submenu lnr lnr-chevron-left"></i>
			</a>
			<div id="scadadril" class="collapse">
				<ul class="nav">
					<li><a href="{{ route('scadadrilling.index') }}" class="">Drilling</a></li>
					<!-- <li><a href="{{ route('scadadrilling.index') }}" class="">Drilling Reports</a></li> -->
					<li><a href="{{ route('drill.reports') }}" class="">Drilling Reports</a></li>
				</ul>
			</div>
		</li>

		<li><a href="{{ route('roles.index') }}" class=""><i class="lnr lnr-cog"></i> <span>Roles</span></a></li>
		<li><a href="{{ route('permission.index') }}" class=""><i class="lnr lnr-cog"></i> <span>Permission</span></a></li>
		<li><a href="{{ route('user.index') }}" class=""><i class="lnr lnr-user"></i> <span>Users</span></a></li>

	@else


	    <li>
	    	<a href="{{ route('scadaproduction.index') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
	    </li>
		<li>
			<a href="#subPages" data-toggle="collapse" class="collapsed">
				<i class="lnr lnr lnr-chart-bars"></i><span>Scada Production</span><i class="icon-submenu lnr lnr-chevron-left"></i>
			</a>
			<div id="subPages" class="collapse">
				<ul class="nav">
					<li><a href="{{route('scadaproduction.index')}}" class="">Production</a></li>
					<li><a href="{{route('LocalReport')}}" class="">Local Reports</a></li>
					<li><a href="{{route('production.reports')}}" class="">Production Reports</a></li>
				</ul>
			</div>
		</li>

		<li>
			<a href="#scadadril" data-toggle="collapse" class="collapsed">
				<i class="lnr lnr-code"></i><span>Scada Drilling</span><i class="icon-submenu lnr lnr-chevron-left"></i>
			</a>
			<div id="scadadril" class="collapse">
				<ul class="nav">
					<li><a href="{{ route('scadadrilling.index') }}" class="">Drilling</a></li>
					<!-- <li><a href="{{ route('scadadrilling.index') }}" class="">Drilling Reports</a></li> -->
					<li><a href="{{ route('drill.reports') }}" class="">Drilling Reports</a></li>
				</ul>
			</div>
		</li>
	   
	@endrole			

			</ul>
		</nav>
	</div>
</div>