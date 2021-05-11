<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>@yield('pageTitle')</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		@include('parts.header')
		<main class="template-sidebar">
			<div class="container">
				<div class="content">
					@yield('content')
				</div>
				<aside>
					<h3>I prodotti più venduti</h3>
					<ul>
						<li>Trofie</li>
						<li>Linguine</li>
					</ul>
					
					@yield('aside')
				</aside>
			</div>
		</main>
		@include('parts.footer')

	</body>
</html>