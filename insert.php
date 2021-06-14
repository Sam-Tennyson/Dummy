<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		include_once("config.php");
		if (isset($_POST['holder']))
		{
			$email = $_POST["email"];
			$pass = $_POST["pass"];

			$result = mysqli_query($mysqli,"INSERT INTO dummy_table(Email, Password) VALUES('$email','$pass')");
			echo "DATA ADDED Successfully";
		}


	?>

</body>
</html>