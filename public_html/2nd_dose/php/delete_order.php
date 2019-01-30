<?php
	$username = "dig4503group2";
	$password = "knights4321!";
	$database = "dig4503group2";

	$connect=mysql_connect("localhost","$username","$password");
	$db=mysql_select_db($database);

if(isset($_POST['delete_row'])) {
	$row_no=$_POST['row_id'];
	mysql_query("delete from orders where id='$row_no'");
	echo "success";
	exit();
}
?>
