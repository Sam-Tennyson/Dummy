<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		include_once("config.php");
		if (isset($_GET['holder']))
		{
			$email = $_GET["email"];
			$pass = $_GET["pass"];

			$result = $mysqli->prepare("INSERT INTO dummy_table(Email, Password) VALUES(?,?)")
			$result->bind_param("is",$email, $name)
			// $result = mysqli_query($mysqli,"INSERT INTO dummy_table(Email, Password) VALUES('$email','$pass')");
			if (!$result)
			{
				echo "ERROR in insertion";
				$mysqli->close();
			}
			else {
				echo "DATA inserted Successfully"
				$mysqli->close();
			}
		}


	?>

</body>
</html>