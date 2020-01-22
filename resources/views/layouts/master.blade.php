<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
</head>
<body>

<header>
	<nav>
		<a href="/">Home</a>
		<a href="/blog">Blog</a>
	</nav>
</header>
<br>

@yield('content')

<br>

<footer>
	<p>
		&copy; Laravel Elza 2018
	</p>
</footer>
</body>
</html>