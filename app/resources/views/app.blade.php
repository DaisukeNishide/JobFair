<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
	<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
</head>
<body>
	@section('header')
	<header>
		<div class="container">
			<div>
				<h1>Job Fair</h1>
				<p>Get More Enjoyable Job</p>
			</div>
		</div>
	</header>
	@show

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Company</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					<p>&copy; JobFair Pte. Ltd. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	@show
</body>
</html>