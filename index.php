<!DOCTYPE html>
<html>
<head>
	<title>google recaptcha</title>
	<!-- google recaptcha scritp -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<h1>Use google recaptcha on form</h1>
<small>Protect my side</small>
<form action="verify.php" method="POST">
	<textarea placeholder="Type something..."></textarea>
	<div class="g-recaptcha" data-sitekey="6LfRNA4UAAAAACu43cey18hR5OxgHJ40ebtRpOA8"></div>
	<button>Submit</button>
</form>
</body>
</html>