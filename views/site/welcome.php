<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="/mvc/views/css/main.css">
</head>
<body>
	<nav>
		<ul>
            <section class="logo">
                <h1>ikt</h1>
            </section>
		    <li>Home</li>
		    <li>About</li>
		    <li>
		    	<form action="/mvc/index.php" method="post">
		    		<input type="submit" value="Logout">
		    	</form>
			</li>
		  </ul>
	</nav>
	<main>
		<section class="cover">
			<section class="spinner">
			  <span class="dot1"></span>
			  <span class="dot2"></span>
			</section>
		</section>
		<header>
			<p>Welcome</p>
		</header>
	</main>
</body>
</html>
