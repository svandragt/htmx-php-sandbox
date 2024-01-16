<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTMX Sandbox</title>

	<script src="https://unpkg.com/htmx.org" defer></script>
	<link rel="stylesheet" type="text/css" href="/styles.css">

	<style>
		/* custom styles */
	</style>

</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
		</ul>
	</nav>
	<main>

		<article>
			<!-- have a button POST a click via AJAX -->
			<button hx-post="/htmx/clicked.php" hx-swap="outerHTML">
				Click Me
			</button>

			<small>Simplest HTMX Test</small>
		</article>
	
	</main>
</body>
</html>
