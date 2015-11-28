<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@section('header')
	<header>
		<h1>Parent Header Text</h1>
	</header>
	@show

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
	<footer>
		<p>Parent Footer Text</p>
	</footer>
	@show
</body>
</html>