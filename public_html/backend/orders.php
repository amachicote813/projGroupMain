<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>2nd Dose</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
<!--ADD GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">
</head>

<body>

<div id="top" class="navbar-fixed">

  <nav class="nav" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#top" class="brand-logo"><h1 id="logo">2nd d<img src="img/2nd-dose-logo.png" id="logo-img" height="44px" width="auto" alt="logo" />se</h1></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#Tickets">Tickets</a>/li>
      </ul>
    </div>

   </nav>
    </div>
  
   <div class="mobile-nav fixed-action-btn toolbar">
    <a class="btn-floating btn-large">
      <i class="large material-icons">navigation</i>
    </a>
    <ul class="mobile-toolbar">
      <li class="waves-effect waves-light"><a href="#Tickets">Tickets</a></li>
    </ul>
    </div>

    <br>
    <h5 id="ticketing" class="center">Barista ticketing</h5>
    <br>

    <div class="row">

      <div class="col s12 content">


      <!--     php and tables start         -->

<div id="wrapper">

<?php
	$username = "dig4503group2";
	$password = "knights4321!";
	$database = "dig4503group2";

	$connect=mysql_connect("localhost","$username","$password");
	$db=mysql_select_db($database);

	$select = mysql_query("SELECT * FROM orders");
?>

<table class="col s12 striped bordered borderR" id="order_table">
  <thead>
  <tr class="tableRow">
	<th class="fontSize">Drink:</th>
	<th class="fontSize">Size:</th>
	<th class="fontSize">Qnt:</th>
	<th class="fontSize">Phone:</th>
	<th class="fontSize">Notes:</th>
	<th class="fontSize">Complete:</th>
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
   	<input type="button" class="delete_btn deleteButton btn lightBrown" id="delete_btn<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
</tr>
<?php
	//set refresh for backend to load new orders every 10 second.
	header('Refresh: 10; url=orders.php'); 
	}
?>
</table>

 <!--     php and tables end         -->
		</div>
	</div>


</div>



  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Originated in Savannah, Georgia, the mission of 2nd Dose Coffee was to give our customers the experience of having a personal coffee barista at their fingertips. </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Navigation</h5>
          <ul>
            <li><a class="white-text" href="#tickets">Tickets</a></li>
            
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Quick Contact</h5>
          <ul class="white-text">
            <li>customerservice@2nddosecoffee.com</li>
            <li>Corp. Office (555)-555-5555</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <!--JQUERY SCRIPTS-->
    <script>
        $(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});
    </script>

</body>
</html>
