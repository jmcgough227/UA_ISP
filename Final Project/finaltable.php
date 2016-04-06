<!DOCTYPE html>

<html>
	<head>
		<title> ISP Final: jrm43 </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="final.css">
	</head>
	
	<body>
		<?php
			function chkname($name)
			{
				$name = prepinput($name);
				return preg_match("/^[A-Z][a-zA-Z]*, [A-Z][a-zA-Z]+, [A-Z].?$/", $name) === 1;
				
			}
			
			function chkaddress($address)
			{
				$address = prepinput($address);
				return preg_match("/^\d+ *[A-Z][a-zA-Z]* *[A-Z][a-zA-Z]*$/", $address) === 1;
			}
			
			function chkcredit($credit)
			{
				$credit = prepinput($credit);
				return preg_match("/^\d{4}-?\d{4}-?\d{4}-?\d{4}$/", $credit) === 1;
			}
			
			function chkphone($phone)
			{
				$phone = prepinput($phone);
				return preg_match("/^\d{3}-?\d{3}-?\d{4}$/", $phone) === 1;
			}
			
			function chkemail($email)
			{
				$email = prepinput($email);
				return preg_match("/^[a-zA-Z][a-zA-Z0-9]*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+$/", $email) === 1;
			}
			
			function prepinput($input)
			{
				$input = trim($input);
				$input = htmlspecialchars($input);
				return $input;
			}
			
			//extract customer info from post
			$name =	$_POST['name'];
			$address = $_POST['address'];
			$credit = $_POST['credit'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			
			//validate customer data
			$validated = 1;
			
			if(!chkname($name))
			{
				$validated = 0;
			}
			if(!chkaddress($address))
			{
				$validated = 0;
			}
			if(!chkcredit($credit))
			{
				$validated = 0;
			}
			if(!chkphone($phone))
			{
				$validated = 0;
			}
			if(!chkemail($email))
			{
				$validated = 0;
			}
			
			//extract order data from post
			$item1 = $_POST['item1'];
			$item2 = $_POST['item2'];
			$item3 = $_POST['item3'];
			$item4 = $_POST['item4'];
			$item5 = $_POST['item5'];
			$item6 = $_POST['item6'];
			$item7 = $_POST['item7'];
			$item8 = $_POST['item8'];
			$item9 = $_POST['item9'];
			$item0 = $_POST['item0'];
			
			//if any item fields were left blank, make their quantity 0
			if($item1 == "") $item1 = 0;
			if($item2 == "") $item2 = 0;
			if($item3 == "") $item3 = 0;
			if($item4 == "") $item4 = 0;
			if($item5 == "") $item5 = 0;
			if($item6 == "") $item6 = 0;
			if($item7 == "") $item7 = 0;
			if($item8 == "") $item8 = 0;
			if($item9 == "") $item9 = 0;
			if($item0 == "") $item0 = 0;
			
			$total_items = $item1 + $item2 + $item3 + $item4 + $item5;
			
			//only run calculations if items were ordered and customer data is valid!
			if($total_items != 0 && $validated = 1)
			{
				echo	'<h3> Customer Info... </h3>';
				echo	"<p> Name: $name </p>";
				echo	"<p> Address: $address </p>";
				echo	"<p> Phone#: $phone </p>";
				echo	"<p> Email: $email </p>";
			
				//compute total cost
				$item1_cost = 2.50 * $item1;
				$item2_cost = 4 * $item2;
				$item3_cost = 1 * $item3;
				$item4_cost = 2.75 * $item4;
				$item5_cost = 7.25 * $item5;
				$item6_cost = 12 * $item6;
				$item7_cost = 4.50 * $item7;
				$item8_cost = 6.25 * $item8;
				$item9_cost = 2 * $item9;
				$item0_cost = 50 * $item0;
				$total_cost = $item1_cost + $item2_cost + $item3_cost +
							  $item4_cost + $item5_cost + $item6_cost +
							  $item7_cost + $item8_cost + $item9_cost +
							  $item0_cost;
							  
				//compute total weight
				$item1_lbs = 2 * $item1;
				$item2_lbs = 1 * $item2;
				$item3_lbs = 2 * $item3;
				$item4_lbs = 3 * $item4;
				$item5_lbs = 5 * $item5;
				$item6_lbs = 4 * $item6;
				$item7_lbs = 1 * $item7;
				$item8_lbs = 2 * $item8;
				$item9_lbs = 3 * $item9;
				$item0_lbs = 5 * $item0;
				$total_lbs = $item1_lbs + $item2_lbs + $item3_lbs +
							 $item4_lbs + $item5_lbs + $item6_lbs +
							 $item7_lbs + $item8_lbs + $item9_lbs +
							 $item0_lbs;
							 
				//compute shipping....
				$shipping_cost = 7.49;
				if($total_lbs > 20) $shipping_cost = 6.99;
				$total_shipping = $shipping_cost * $total_lbs;
				
				//compute overall cost of the items ordered, shipping and tax
				$overall_cost = ($total_cost + $total_shipping) * 1.0645;
				
				//generate table of ordered items
				//don't ask about all the echoes... I have no idea either
				echo	'<h3> Items Ordered... </h3>';
				echo	'<table>';
				echo		'<tr>';
				echo			'<td class="tblhead"> Product </td>';
				echo			'<td class="tblhead"> Unit Price </td>';
				echo			'<td class="tblhead"> Quantity </td>';
				echo			'<td class="tblhead"> Total Item Cost </td>';
				echo			'<td class="tblhead"> Total Item Weight </td>';
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Red Pixels </td>';
				echo			'<td> $2.50 </td>';
				echo			"<td> $item1 </td>";
				echo			"<td> $$item1_cost </td>";
				echo			"<td> $item1_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Orange Pixels </td>';
				echo			'<td> $4.00 </td>';
				echo			"<td> $item2 </td>";
				echo			"<td> $$item2_cost </td>";
				echo			"<td> $item2_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Yellow Pixels </td>';
				echo			'<td> $1.00 </td>';
				echo			"<td> $item3 </td>";
				echo			"<td> $$item3_cost </td>";
				echo			"<td> $item3_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Green Pixels </td>';
				echo			'<td> $2.75 </td>';
				echo			"<td> $item4 </td>";
				echo			"<td> $$item4_cost </td>";
				echo			"<td> $item4_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Blue Pixels </td>';
				echo			'<td> $7.25 </td>';
				echo			"<td> $item5 </td>";
				echo			"<td> $$item5_cost </td>";
				echo			"<td> $item5_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Indigo Pixels </td>';
				echo			'<td> $12.00 </td>';
				echo			"<td> $item6 </td>";
				echo			"<td> $$item6_cost </td>";
				echo			"<td> $item6_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Violet Pixels </td>';
				echo			'<td> $4.50 </td>';
				echo			"<td> $item7 </td>";
				echo			"<td> $$item7_cost </td>";
				echo			"<td> $item7_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> White Pixels </td>';
				echo			'<td> $6.25 </td>';
				echo			"<td> $item8 </td>";
				echo			"<td> $$item8_cost </td>";
				echo			"<td> $item8_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Black Pixels </td>';
				echo			'<td> $2.00 </td>';
				echo			"<td> $item9 </td>";
				echo			"<td> $$item9_cost </td>";
				echo			"<td> $item9_lbs lbs. </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td> Prism Pixels </td>';
				echo			'<td> $50.00 </td>';
				echo			"<td> $item0 </td>";
				echo			"<td> $$item0_cost </td>";
				echo			"<td> $item0_lbs lbs. </td>";
				echo		'</tr>';
				echo			'<tr>';
				echo			'<td colspan="3"> Total Cost of Items </td>';
				echo			"<td> $$total_cost </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td colspan="3"> Shipping </td>';
				echo			"<td> $$total_shipping </td>";
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td colspan="3"> Sales Tax Rate </td>';
				echo			'<td> 6.45% </td>';
				echo		'</tr>';
				echo		'<tr>';
				echo			'<td colspan="3"> Overall Total </td>';
				echo			"<td> $$overall_cost </td>";
				echo		'</tr>';
				echo	'</table>';
			}
			else
			{
				echo '<h1> No items ordered, or customer information was incorrect! </h1>';
				echo "If validation was successful, this should be 1! validated = $validated";
			}
			
		?>
		
		<!-- Button for returning to order form -->
		<form action="final.php" action="">
			<input type="submit" value="Click here to return to form!">
		</form>
	</body>
</html>
