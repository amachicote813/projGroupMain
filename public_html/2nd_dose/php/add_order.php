<?php
function add_order($drink, $size, $quantity, $phone, $notes) {

	$username = "dig4503group2";
	$password = "knights4321!";
	$database = "dig4503group2";

	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or 		die(mysql_error());


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

	mysqli_close($connection);
}
?>
