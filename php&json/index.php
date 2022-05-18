<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Welcome</title>
</head>
<body>

	<h1>Tugas JSON & PHP</h1>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<h3>Hubungi Kami</h3>
		<label>Masukkan Email</label>
		<input type="email" name="email">

		<label>Subyek</label>
		<input type="text" name="subject">

		<label>Pesan</label>
		<textarea name="message"></textarea>

		<input type="submit" name="submit">

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
</body>
</html>