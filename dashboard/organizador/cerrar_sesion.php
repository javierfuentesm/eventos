<!DOCTYPE html>
<html>
<body>

<h1>form</h1>

<?php

		if(!isset($_SESSION['email']) && empty($_SESSION['email']))
		{
			session_start();
			echo "Session undefined";

		}
		else
		{
			echo "Session defined before";

		}
		
					echo "Session defined value= ";
					print_r($_SESSION);

session_unset(); 

session_destroy(); 

header("Refresh:0; url=../../index.php");

?>
</body>
</html>