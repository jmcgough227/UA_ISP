<!DOCTYPE HTML>

<html lang="en">
	<head>
		<title> Assignment 5 </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assign5.css">
		
		<script type="text/javascript">
			function getInfo(phone)
			{
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function ()
					{
						if(xhr.readyState == 4 && xhr.status == 200)
						{
							var result = xhr.responseText;
							var info = result.split(", ");
							var accnum = info[2].split(" : ");
							
							document.getElementById("lname").value = info[0];
							document.getElementById("mname").value = info[1];
							document.getElementById("fname").value = accnum[0];
							document.getElementById("account").value = accnum[1];
						}
					}
				xhr.open("GET", "customerInfo.php?phone="+phone,true,true);
				xhr.send();
			}
		</script>
	</head>
	
	<body>
		<h1> Welcome to the account log in page! </h1>
		
		<!-- Account info form -->
		<form action="" method="">
			<!-- table to organize fields -->
			<table>
				<tr>
					<td> <label> Phone#: </label> </td>
					<td> <input type="input" name="phone" id="phone"
								onblur="getInfo(this.value)"> </input> </td>
				</tr>
				<tr>
					<td> <label> First Name: </label> </td>
					<td> <input type="input" name="fname" id="fname"> </input> </td>
				</tr>
				<tr>
					<td> <label> Middle Initial: </label> </td>
					<td> <input type="input" name="mname" id="mname"> </input> </td>
				</tr>
				<tr>
					<td> <label> Last Name: </label> </td>
					<td> <input type="input" name="lname" id="lname"> </input> </td>
				</tr>
				<tr>
					<td> <label> Account#: </label> </td>
					<td> <input type="input" name="account" id="account"> </input> </td>
				</tr>
					<!-- empty cell to align buttons -->
					<td> </td>
					<!-- field is shared by both buttons -->
					<td> 
						<button type="submit" name="login"> LOG IN </button>
						<button type="reset" name="reset"> RESET </button>
					</td>
			</table>
		</form>
		
		<br />
		<br />
		
		<ul> Try these numbers:
			<li> 5551234 </li>
			<li> 5555678 </li>
			<li> 5559012 </li>
			<li> 5553456 </li>
			<li> 5557890 </li>
			<li> 5559876 </li>
			<li> 5555432 </li>
			<li> 5551098 </li>
			<li> 5557654 </li>
			<li> 5553210 </li>
		</ul>
	</body>
</html>

