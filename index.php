<!DOCTYPE HTML>

<html>
	<head>
		<title>Price Tracker</title>
		<meta charset="utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="Logo.png" />
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<h1>Welcome</h1>
							<p>Search for a product you would like to track. <br> We will notify you if there are any changes in its price.</p>
							<form action="AmazonSearch.php" method="post">
							    <input type="text" name="product" placeholder="Product" /><br />
							    <input type="text" name="email" placeholder="Email" /><br />
							    <input type="submit" name="submit" value="Search" />
							</form>

						</header>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="credits">
							<li>Samast Varma, Varad Nevasekar, Saurav Chhatrapati</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>

				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

			<!-- <?php 
				$servername = "localhost";
		        $username = "pi";
		        $password = "codeday";
		        $dbname = "users";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO Users (Email)
				VALUES ("+$email+")";

				if ($conn->query($sql) === TRUE) {
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
}
			?> -->


	</body>
</html>