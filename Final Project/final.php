<!DOCTYPE html>

<!-- PHP validation (everything)
	Result calculator/display -->

<html>
	<head>
		<title> ISP Final: jrm43 </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="final.css">
	</head>
	
	<body>
		<form action="finaltable.php" method="post">
			<h2>
				Welcome to the EpiXel. Order Form! <br />
				(Credit Only!) 
			</h2>
			<hr />
			<table> <!-- Customer Info table begin -->
				<tr>
					<td colspan="2" align="center"> Buyer Info </td> 
				</tr>
				<tr>
					<td class="tblhead"> Name: </td>
					<td> <input type="text" name="name" /> </td>
				</tr>
				<tr>
					<td class="tblhead"> Address: </td>
					<td> <input type="text" name="address" /> </td>
				</tr>
				<tr>
					<td class="tblhead"> Credit Type: </td>
					<td>
						<input type="radio" name="cardtype" value="viza" /> Viza
						<input type="radio" name="cardtype" value="discoverer" /> Discoverer
						<input type="radio" name="cardtype" value="mastercharge" /> Mastercharge
					</td>
				</tr>
				<tr>
					<td class="tblhead"> Credit #: </td>
					<td> <input type="text" name="credit" /> </td>
				</tr>
				<tr>
					<td class="tblhead"> Phone #: </td>
					<td> <input type="text" name="phone" /> </td>
				</tr>
				<tr>
					<td class="tblhead"> Email: </td>
					<td> <input type="text" name="email" /> </td>
				</tr>
			</table> <!-- Customer Info table end --> <hr />
			
			<h3> Order items here! </h3>
			<table> <!-- Item Order Form table begin -->
				<tr>
					<td class="tblhead"> Product </td>
					<td class="tblhead"> Weight </td>
					<td class="tblhead"> Price </td>
					<td class="tblhead"> Quantity </td>
				</tr>
				<tr>
					<td> Red Pixels </td>
					<td> 2 lbs. </td>
					<td> $2.50 </td>
					<td> x <input type="number" min="0" max="99" name="item1" /> </td>
				</tr>
				<tr>
					<td> Orange Pixels </td>
					<td> 1 lbs. </td>
					<td> $4.00 </td>
					<td> x <input type="number" min="0" max="99" name="item2" /> </td>
				</tr>
				<tr>
					<td> Yellow Pixels </td>
					<td> 2 lbs. </td>
					<td> $1.00 </td>
					<td> x <input type="number" min="0" max="99" name="item3" /> </td>
				</tr>
				<tr>
					<td> Green Pixels </td>
					<td> 3 lbs. </td>
					<td> $2.75 </td>
					<td> x <input type="number" min="0" max="99" name="item4" /> </td>
				</tr>
				<tr>
					<td> Blue Pixels </td>
					<td> 5 lbs. </td>
					<td> $7.25 </td>
					<td> x <input type="number" min="0" max="99" name="item5" /> </td>
				</tr>
				<tr>
					<td> Indigo Pixels </td>
					<td> 4 lbs. </td>
					<td> $12.00 </td>
					<td> x <input type="number" min="0" max="99" name="item6" /> </td>
				</tr>
				<tr>
					<td> Violet Pixels </td>
					<td> 1 lbs. </td>
					<td> $4.50 </td>
					<td> x <input type="number" min="0" max="99" name="item7" /> </td>
				</tr>
				<tr>
					<td> White Pixels </td>
					<td> 2 lbs. </td>
					<td> $6.25 </td>
					<td> x <input type="number" min="0" max="99" name="item8" /> </td>
				</tr>
				<tr>
					<td> Black Pixels </td>
					<td> 3 lbs. </td>
					<td> $2.00 </td>
					<td> x <input type="number" min="0" max="99" name="item9" /> </td>
				</tr>
				<tr>
					<td> Prism Pixels </td>
					<td> 5 lbs. </td>
					<td> $50.00 </td>
					<td> x <input type="number" min="0" max="99" name="item0" /> </td>
				</tr>
			</table> <!-- Item Order Form table end -->
			<input type="submit" name="submit" value="Submit Info and Place Order" />
			<input type="reset" name="reset" value="Reset Form" />
		</form> <hr />
	</body>
</html>

