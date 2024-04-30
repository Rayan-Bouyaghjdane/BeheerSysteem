<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="/app.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<title>Asha Beheersyteem van computer</title>
	</head>

	<body>
		<header>
			<div class="logo">
				<a href="/">
					<img src="{{ asset('img/ashalogo.png') }}" alt="Logo" />
				</a>
			</div>
			<div class="site-name">
				<h1>Asha Beheersyteem van computers</h1>
			</div>
		</header>

		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Computers</a>
					<div class="dropdown-content">
						<a href="#scherm1">Scherm 1</a>
						<a href="#scherm2">Scherm 2</a>
						<a href="#scherm3">Scherm 3</a>
						<a href="#scherm4">Scherm 4</a>
						<a href="#scherm5">Scherm 5</a>
						<a href="#scherm6">Scherm 6</a>
						<a href="#scherm7">Scherm 7</a>
						<a href="#scherm8">Scherm 8</a>
					</div>
				</li>

				<li><a href="/reserveren">Reserveren</a></li>
				<li><a href="#inloggen">Inloggen</a></li>
				<li><a href="#register">Register</a></li>
			</ul>
		</nav>