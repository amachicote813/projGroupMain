
<!DOCTYPE html>

<html>

<head>

<style>

table, th, td {

    border: 1px solid black;

}

</style>

</head>

<body>



<?php

 $server = mysql_connect("localhost", "dig4503group2", "knights4321!"); 

  $db = mysql_select_db("dig4503group2", $server); 

  $query = mysql_query("SELECT * FROM orders");?>





  

  

   <?php

	 while ($row = mysql_fetch_array("$query")) {?>

                    <tr>

                    <td><?php echo $row['drink'];?></td>

                    <td><?php echo $row['size'];?></td>

                    <td><?php echo $row['quantity'];?></td>

                    <td><?php echo $row['phone'];?></td>

                    <td><?php echo $row['notes'];?></td>

				   

                    </tr>

               <?php }

  ?>



<table id="Orders">

  <tr>

   

	<td>drink</td>

	<td>size</td>

	<td>quantity</td>

	<td>phone</td>

	<td>notes</td>

  </tr>

  





</table><br>

<button onclick="BumpOrder()" onclick="#" onclick="#">Done</button><br>



<script>

function BumpOrder() {

    document.getElementById("Orders").deleteRow(1);

}

</script>



function PushOrder() {



}







</body>

</html>
