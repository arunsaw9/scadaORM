<!doctype html>
<html lang="en">

<head>
	@include('orm.layouts.head')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('orm.layouts.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('orm.layouts.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@section('main')
		
		@show
		<!-- END MAIN -->
		<div class="clearfix"></div>
		@include('orm.layouts.footer')
	</div>
	<!-- END WRAPPER -->

	

</body>

</html>
