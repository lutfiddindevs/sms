<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-system</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="p-6 bg-yellow-300 flex justify-between mb-6">
		<ul class="flex items-center">
			<li>
				<a href="" class="p-3">home</a>
			</li>
			<li>
				<a href="" class="p-3">Dashboard</a>
			</li>
			<li>
				<a href="" class="p-3">Info</a>
			</li>
		</ul>
		<ul class="flex items-center">
			<li>
				<a href="" class="p-3">Student</a>
			</li>
			<li>
	            <form action="" method="" class="p-3 inline">
	                @csrf
				    <button type="submit">Logout</button>
	            </form>
			</li>
			<li>
				<a href="" class="p-3">Register</a>
			</li>
			<li>
				<a href="" class="p-3">Login</a>
			</li>
		</ul>
	</nav>
   @yield('content')
</body>
</html>