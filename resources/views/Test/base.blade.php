<!DOCTYPE html>
<html>
<head>
	<title>父页面测试</title>
	<style type="text/css">
		.par h2{
			color: red;
		}
	</style>
</head>
<body>
	<div class="par">
	@section('testpar')
	<h2>这是一个父级页面</h2>
	@show

	<div class="container">
    	@yield('content')
    </div>	
	</div>
</body>
</html>