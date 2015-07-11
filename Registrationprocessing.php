<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="menu.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="jquery/themes/base/jquery.ui.all.css"/>

 <script src="jquery/jquery-1.8.3.js"></script>
	<script src="jquery/ui/jquery.ui.core.js"></script>
	<script src="jquery/ui/jquery.ui.widget.js"></script>
	<script src="jquery/ui/jquery.ui.position.js"></script>
	<script src="jquery/ui/jquery.ui.tooltip.js"></script>
	<script src="jquery/ui/jquery.ui.button.js"></script>
    <script src="jquery/ui/jquery.ui.datepicker.js"></script>
    <script src="jquery/jquery.validate.js"></script>
 
<style>
	label {
		display: inline-block; 
		width: 6em;
	}
	
	fieldset{
		border-color:#76b700;
		border-radius: 4px;
		border-width:thick;
		border-style:groove;
		}
	fieldset div {
		margin-bottom: 2em;
		margin-left:3em;
		font-size:16px;
		font-style:oblique;
		
		
	}
	fieldset .help {
		display: inline-block;
	}
	.ui-tooltip {
		width: 210px;
	}
	</style>

<script>
/*Form Tooltip script*/

	$(function() {
		var tooltips = $( "[title]" ).tooltip();
		$( "<button>" )
			.button( )
			.click(function() {
				tooltips.tooltip( "open" );
			})
			
	});
	
	
    </script>




<title>Reservation</title>
</head>

<body>
<div id="header-wrap">
	<div id="page">
		<div id="header-container">
			<table id="header">
				<tr>
					<td width="47%" height="300" id="wsitelogo"><img src="images/Two-peas-logo.jpg" alt="Twopeas Logo" width="413" height="250" class="wsite-logo"></td>
					<td width="53%" id="header-right">
						<table width="68" height="20">
						  <tr>
								<td width="300" class="phone-number"> </td>
								<td width="51" class="wsite-social"></td>
							</tr>
						</table>
						<div class="wsite-search"><input name="Searchbox" class="wsite-search-input" id="" title="SEARCH">
                        <img src="images/submit-bg-gray.png" alt="searchicon" width="32" height="32" class="wsite-search-button">
					  </div>
					</td>
				</tr>
			</table>
			<div id="topnav">
            <ul>
				<li><a href="Home.html">Home</a></li>
                <li><a href="Menu.html">Menu</a></li>
                <li><a href="Reservations.php">Reservations</a></li>
                <li><a href="TheBar.html">The Bar</a></li>
            </ul>     
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
</div>
<div id="banner-wrap">
	<div id="container">
		<div id="banner-bot">
			<div id="banner">
				<div id="banner-mid">
					<div id="banner-outer">
						<div class="wsite-header"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="main-wrap">
	<div id="page">
		<div id="main">
			<div id="content">
<div id=message>

<?php

// Connecting to Database twopeareservations//

$con = mysqli_connect("localhost","simba","");

// What to Report If Connection Fails//
if(!$con)
{
die('Connection Error (' . mysqli_connect_errno() . ')' 
            . mysqli_connect_error());
}

// If connection Successful execute query below//

mysqli_select_db($con,"twopeasreservations")or die( "Unable to select database");

$sql= "INSERT INTO reservations (Title, Name, Lastname, MobileNo, EmailAdd, Breakfast,Lunch,Dinner,ResMadeFor,NumberOfGuests)
VALUES('$_POST[title]','$_POST[name]','$_POST[lastname]','$_POST[mnumber]','$_POST[email]','$_POST[bfast]','$_POST[lunch]','$_POST[dinner]','$_POST[date]','$_POST[guests]')";

//If Query execution fails or succeeds report error//

if (!mysqli_query($con,$sql))
  {
  die("Error: Reservation Unsuccessfull" . mysqli_error($con));
  }
  
else{echo "Thank you"." ".$_POST['title']." ".$_POST['name']." ".$_POST['lastname']."
 <br/>";
echo " Reservation Successful!";
}
};
// Closing connection//
mysqli_close($con);

?>
</div>
<center><p> <img src="images/listicon.gif"/> 
			    <img src="images/listicon.gif"/>
			    <img src="images/listicon.gif"/>
			    <img src="images/listicon.gif"/>
				<img src="images/listicon.gif"/>
			</p></center>
            </div>
		</div>
	</div>
</div>
<div id="footer-wrap">

  <div id="page">
     
       <div id="contacts">
<h2> Contacts</h2>
        <p>Mobile: +263 777914469 <br/>
         Email: sales@twopeasbarandgrill.com</p>
        <p>
<a  href=""> <img src="images/social_icon_facebook.jpg" width="42" height="38" alt="facebook"> </a>
<a  href=""><img src="images/social_icon_twitter.jpg" width="42" height="38" alt="Twitter" ></a>
<a  href=""> <img src="images/social_icon_youtube.jpg" width="42" height="38" alt="YouTube"> </a>
</div>
<div id="footer">www.twopeasbar&grill.com <br/>
        &copy; 2014
    </div>
	</div>
</div>
</body>
</html>