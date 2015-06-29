<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="main_style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="jquery/themes/base/jquery.ui.all.css"/>
<link rel="stylesheet" href="style.css" type="text/css"/>

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
		$( "button" )
			.button( )
			.click(function() {
				tooltips.tooltip( "open" );
			})
			
	});
	
	
    </script>

<title>Reservations</title>
</head>

<body class="wsite-theme-light tall-header-page">


<div id="header-wrap">
	<div id="page">
		<div id="header-container">
			<table id="header">
				<tr>
					<td width="47%" height="300" id="wsitelogo"><img src="images/Two-peas-logo.jpg" alt="Twopeas Logo" width="300" height="200" class="wsite-logo">
					<td width="53%" id="header-right">
						<table width="68" height="20">
						  <tr>
								<td width="300" class="phone-number"> </td>
								<td width="51" class="wsite-social"></td>
							</tr>
						</table>
						<div class="wsite-search"><input name="Searchbox" class="wsite-search-input" id="" title="SEARCH">
                        <img src="images/submit-bg-gray.png" alt="searchicon" width="25" height="32" class="wsite-search-button">
					  </div>
					</td>
				</tr>
			</table>
			<div id="topnav">
            <ul>
				<li><a href="Home.html">Home</a></li>
                <li><a href="Menu.html">Menu</a></li>
                <li><a href="Reservations.php">Reservations</a></li>
                <li><a href="Bar.html">The Bar</a></li>
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
            <form id="reservations" formname="Reservations" method="POST" action="Registrationprocessing.php" >
            
             <fieldset>
             <center><h2>Reservations</h2></center>
          
                  <div>
                  <label for="title">Title</label>
            <select name="title" id="tittle">
                   <option>Mr</option>
                   <option>Mrs</option>
                   <option>Miss</option>
                   <option>Ms</option>
                </select>
                </div>
                 
           <div style="display:inline-block">
           
			<label for="firstname" >Name</label>
			<input id="firstname" name="name" title="Please provide your firstname." class="required">
            
            <label for="lastname" style="margin-left:5em">Last Name</label>
			<input id="lastname" name="lastname" title="Please provide also your lastname." class="required">
		</div>     
          
        
        
        <div>
			<label for="mnumber">Mobile No</label>
			<input id="mnumber" name="mnumber" title="Please provide your mobile." class="required">
            
            <label for="email" style="margin-left:5em">Email Address</label>
			<input id="email" name="email" title="Please provide  your email address." class="required">
		</div>
        
       
          
              
         <center><h2>Reservations for</h2></center>
            
          <table><tbody>
          <tr>
            <td>
          <div> 
          <label for="breakdast">Breakfast</label>
             <select name="bfast" id="bfast">
             <option value="0" selected>--Choose--</option>
                   <option>9.00AM</option>
                   <option>10.00AM</option>
                   <option>11.00AM</option>
                </select>
            </div> 
             
          <div>
         <label for="lunch">Lunch </label>
            <select name="lunch" id="lunch">
            <option value="0" selected>--Choose--</option>
                   <option>12.00</option>
                   <option>13.00</option>
                   <option>14.00</option>
                   <option>15.00</option>
                </select>
            </div> 
            
          <div> 
          <label for="dinner">Dinner</label>
            <select name="dinner" id="dinner">
            <option value="0" selected>--Choose--</option>
                   <option>17.30</option>
                   <option>18.00</option>
                   <option>19.00</option>
                   <option>20.00</option>
                </select>
                </div>
             </td>
                 
          
           <td>                
          <div>
          
          <label for="numberofguests" style="margin-left:7em">Number of Guests</label>
           <input type="number" name="guests" min="2" max="24" size="2" title="Max number of guests (24). If you require more please call us." class="required">              
           </div>
            <div>  
             <label for="date" style="margin-left:7em">Date<label/>
             <input type="text" id="datepicker" name="date" size="10" title="Please choose the date for your booking." class="required" />
            </div>
            </td></tr></tbody>
            </table>
            <div>
            
            <center><input type="submit" name="submit" value="Make Reservation" id="btn" />
             <input type="Reset" name="submit" id="btn" /></center>
            </div>
            
            </fieldset>
            </form>
            
            
            
            <p>We are open every Tuesday to Sunday</p>
          
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

 <script>
		$(function() {
		$( "#datepicker" ).datepicker({
			showOn: "button",
			buttonImage: "jquery/images/calendar.gif",
			buttonImageOnly: true
		});
	});
	
	</script> 
<script>
$("form").validate();
</script>
</body>
</html>
