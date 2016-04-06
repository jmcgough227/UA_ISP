<!DOCTYPE html>
<html>
	<head>
		<title> Assignment 4 </title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<?php require 'operations.php' ?>
		<h1> ISP Assignment 4 - Calculator </h1>
		<form action="Assignment4.php" method="post">
			<!-- Calculator number fields -->
			<input readonly type="input" name="result" value="<?php echo $_SESSION["result"] ?>"> </input> <label> Result </label>
			<input type="input" name="input" value=""></input> <label> Input </label> <br />
			<!-- Calculator operation buttons -->
			<div class="opfield">
				<input class="button" type="submit" name="op" value="+"></input>
				<input class="button" type="submit" name="op" value="-"></input>
				<input class="button" type="submit" name="op" value="*"></input>
				<input class="button" type="submit" name="op" value="/"></input>
				<input class="button" type="submit" name="op" value="="></input>
				<input style="font-size: 20px; width: 70px;" 
					class="button" type="submit" name="op" value="Reset"></input>
			</div>
		</form>
	</body>
</html>