<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<?php
			session_start();
			
			//$_SESSION["result"] = 0.0;
			//unset($_SESSION["result"]);
			
			print($_SESSION["result"]); 
			echo "<br />";
			print($_SESSION["input"]);
			echo "<br />";
			print($_SESSION["op"]);
			echo "<br />";
			
			// If no current value in result, set it to be zero
			if(!isset($_SESSION["result"])){ $_SESSION["result"] = 0.0; }

			// If no current value in input, set it to be zero
			if(!isset($_SESSION["input"])) $_SESSION["input"] = 0.0;

			// Check input and operation for validity before proceeding
			if(/*$_SESSION["input"] != "" && ($_SESSION["op"] != "/" || $_SESSION["input"] != 0)*/ true)
			{
				if($_SESSION["op"] == "+") $_SESSION["result"] += $_SESSION["input"];
				else if($_SESSION["op"] == "-") $_SESSION["result"] -= $_SESSION["input"];
				else if($_SESSION["op"] == "*") $_SESSION["result"] *= $_SESSION["input"];
				else if($_SESSION["op"] == "/") $_SESSION["result"] /= $_SESSION["input"];
				else if($_SESSION["op"] == "=") $_SESSION["result"] = $_SESSION["input"];
				else if($_SESSION["op"] == "Reset") unset($_SESSION["result"]);
			}
		?>
	</body>
</html>