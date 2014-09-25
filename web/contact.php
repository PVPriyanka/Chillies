﻿<!DOCTYPE HTML>
<html>
<head>
<title>Chillies-Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta keywords="Chillies,Resturant,Brisbane,food,Woolloongabba">
<meta description="Chillies is  a Bisbane based Australian restaurant">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrap"> 
	<div class="total">
		<div class="header">
				<div class="header-bot">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="logo"/></a>
						</div>
				 		<div class="clear"></div> 
					</div>
					<div class="clear"></div> 
		</div>	
		<div class="menu"> 	
			<div class="top-nav"> 
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
					<div class="clear"></div> 
			</div>
		</div>		
		<div class="main">
   		  <div class="contact">
				<div class="col span_2_of_3">
					<div>
					   <p> Chillies a place to relax with a few drinks after work, watch the game or hold a function.</p>
					<p>Come in and say G'day to our friendly staff, we will make you feel right at home!</p>
				</div>
			<div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact.html">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						   
						    <div>
						    	<span><label>Message</label></span>
						    	<span><textarea name="message"> </textarea></span>
						    </div>
						 <div>
						     	<span><label>what is 2+2</label></span>
						    	<span><input name="human" type="text" class="textbox"></span>
						    </div>
						   <div>
						   		<button class="btn1 btn-8 btn-8a">Submit</button>
						  </div>

					    </form>
				<?php
    $name = (isset($_POST['name']) ? $_POST['name'] : null);
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $message = (isset($_POST['message']) ? $_POST['message'] : null);
    $from = 'From: Priyanka'; 
    $to = 'pv.priyanka25@gmail.com'; 
    $subject = 'Hello';
    $human = (isset($_POST['human']) ? $_POST['human'] : null);
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
  if (isset($_POST['submit'])) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail($to, $subject, $body, $from)) { 
	        echo 'Your message has been sent!';
	    } else { 
	        echo 'Something went wrong, go back and try again!'; 
	    } 
	} else if (isset($_POST['submit']) && $human != '4') {
	    echo 'You answered the anti-spam question incorrectly!';
	}
    } else {
        echo 'You need to fill in all required fields!!';
    }
    }
?>
				  </div>
			<div>
			<ul>
			<li><h3><strong>Hours</h3></strong></li>
			<li>Monday - Thursday:<span>11:30 am-10:00 pm</span></li>
			<li>Friday - Sunday <span>11:30 am- 11:00 pm</li> 
			</div>
			  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="images/map.png"></iframe><br><small><a href="https://www.google.com.au/maps/place/2%2F33+Broadway+St,+Woolloongabba+QLD+4102/@-27.49135,153.037437,15z/data=!4m2!3m1!1s0x6b915a6a6563210b:0x505e551171985b45" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Address</h3>
						    	<p>2/33 Broadway Street</p>
						<p>Phone:0403 000 000</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@chillies.com.au</span></p>
				   </div>
				 </div>
				 <div class="clear"></div> 
			  </div>
		 	</div>
		</div>
	</div>
</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 All rights Reserved </p>
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            