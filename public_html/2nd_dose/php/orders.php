<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<!--jquery before materialize-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!--materialize css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/twilio_text.js"></script>
	<title></title>
</head>

<body>
<div id="wrapper">

<?php
	$username = "dig4503group2";
	$password = "knights4321!";
	$database = "dig4503group2";

	$connect=mysql_connect("localhost","$username","$password");
	$db=mysql_select_db($database);

	$select = mysql_query("SELECT * FROM orders");
?>

<table class="striped" id="order_table">
  <thead>
  <tr>
<th>Drink:</th>
<th>Size:</th>
<th>Quantity:</th>
<th>Phone:</th>
<th>Notes:</th>
<th>Complete:</th>
  </tr>
  </thead>
    <tbody>
      <tr></tr>
    </tbody>

<?php
	while ($row=mysql_fetch_array($select)) {
?>
<tr id="row<?php echo $row['id'];?>">
    <td id="drink<?php echo $row['id'];?>"><?php echo $row['drink'];?></td>
    <td id="size<?php echo $row['id'];?>"><?php echo $row['size'];?></td>
    <td id="quantity<?php echo $row['id'];?>"><?php echo $row['quantity'];?></td>
    <td id="phone<?php echo $row['id'];?>"><?php echo $row['phone'];?></td>
    <td id="notes<?php echo $row['id'];?>"><?php echo $row['notes'];?></td>
  <td>
   	<input type="button" class="delete_btn" id="delete_btn<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
</tr>
<?php
	//set refresh for backend to load new orders every 10 second.
	header('Refresh: 10; url=orders.php');
	}
?>
</table>

</div>
</body>
</html>
