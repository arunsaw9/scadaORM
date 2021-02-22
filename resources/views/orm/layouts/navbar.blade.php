

	<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="padding: 10px;margin-left: 15px;">
				<a href="index.html"><img src="{{ asset('backend/img/ongc1.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
				<!-- <div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div> -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('backend/img/user.png') }}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }} </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu" style="    min-width: 110px;">
								<!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li -->
							
								{{-- <li>
									@if (Route::has('password.request'))
									    <a href="{{ route('password.request') }}">
									        <i class="lnr lnr-cog"></i> <span>Change Password</span>
									    </a>
									@endif
								</li> --}}
								<form method="POST" action="{{ route('logout') }}">
	                            @csrf

	                            <li style="padding: 10px 0;"><a href="{{ route('logout') }}"
									onclick="event.preventDefault();
	                                    this.closest('form').submit();" style="padding: 10px 20px;">
	                               <i class="lnr lnr-exit"></i> <span>Logout</span>
	                           </a></li>
	                        	</form>
								
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>