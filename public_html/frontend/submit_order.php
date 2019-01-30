<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title></title>
</head>

<body>
<?php
session_start();
//include("orders.php");
	$username = "dig4503group2";
	$password = "knights4321!";
	$database = "dig4503group2";
	
	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or 		die(mysql_error());
	
	$drink = $size = $quantity = $phone = $notes ="";	
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$drink = $_POST['drink'];
			$size = $_POST['size'];
			$quantity = $_POST['quantity'];
			$phone = $_POST['phone'];
			$notes = $_POST['notes'];
			
			$sql = "INSERT INTO orders (drink,size,quantity,phone,notes)VALUES('$drink','$size','$quantity','$phone','$notes')";
			
			$result = mysqli_query($connection,$sql);
			$sql = "SELECT phone FROM orders order by id desc LIMIT 1";
			//returns last phone number entered into database.
			$result = mysqli_query($connection,$sql);
			$value = mysqli_fetch_field($result);

	if ($value = $phone) {
		//checking to see if query result matches phone number to add to database successfully.
		echo "order received";	
		}
		
		else {
			echo "Error receiving order, try again.";
		}
}
mysqli_close($connection);
?>

<div id="mainCont">
	<h1>Choose coffee</h1>

 	<!--**this was the dummy form i made to test order on submit... to be replaced with frontend content-->
    <form action="submit_order.php" method="POST" >  
		<input type="hidden" name="drink" value="Coffee">
		<input type="hidden" name="size" value="M">
		<input type="hidden" name="quantity" value="1">
		<input type="hidden" name="phone" value="09876543">
		<input type="hidden" name="notes" value="sugar">

		<input type="submit" name="subacct" value="Gimme my Coffee!">        
    </form>
</div>
</body>
</html>