<?php
	$customerInfo = array( "5551234" => "Johnson, J., Jimmy : 0000",
						   "5555678" => "Fredrickson, F., Fred : 0001",
						   "5559012" => "Milano, M., Mila : 0010",
						   "5553456" => "Taft, H., Bill : 0011",
						   "5557890" => "Hitchcock, J., Alfred : 0100",
						   "5559876" => "Joel, M., William : 0101",
						   "5555432" => "Sagan, E., Carl : 0110",
						   "5551098" => "Freeman, D., Gordon : 0111",
						   "5557654" => "Jackson, J., Jackie : 1000",
						   "5553210" => "Robertson, R., Roberta : 1001",
						 );
						 
	//header("Content-Type: text/plain");
	$phone = $_GET["phone"];
	
	if(array_key_exists($phone, $customerInfo))
	{
		print $customerInfo[$phone];
	}
	else
	{
		print ", ,  : ";
	}
?>