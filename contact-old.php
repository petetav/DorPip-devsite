<!DOCTYPE html>
<html lang="en">
	
<head>	
	<title>Dorpip content="Dorset Parent infant partnership</title>
	<meta name=“description” content= “Find out all about the Dorset Parent Infant Partnership.”>
	<?php include 'includes/head.php'; ?>
</head>

<body>
		<div class="static_top">
<!--masthead -->
	<?php include 'includes/masthead.php'; ?>

<!--gradient spacer -->
<div class="bg_gradient" width="100%">

<!-- navbar-1 -->		
	<?php include 'includes/navbar-1.php'; ?> 

</div>
</div> <!--end of Static_top -->

<div class="container-noflex">
<div class="blurb-noflex">
	
<div class="form_container">
  <form action="/action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="telephone">Telephone number</label>
    <input type="text" id="telephone" name="telephone" placeholder="Current phone number"
    
    <label for="email" name="country">Email address</label>
	<input type="email" id="email" name="email" placeholder="...@...com?"
	
    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
	
	<label for="choice">Which service do you require?</label>

<br/><br/>
	
<form action="">
	<input type="radio" name="service" value="self_referral"> Self referral<br>
	<input type="radio" name="service" value="professional"> Professional referral<br>
	<input type="radio" name="service" value="information"> Requesting information<br>
    <input type="radio" name="service" value="donate"> Donate  <br/>
    <input type="radio" name="service" value="team"> Join the team<br/>
    <input type="radio" name="service" value="feedback"> Feedback  <br/>
    <input type="radio" name="service" value="other"> Other  <br/>
    <br/>
    
    <input type="checkbox" name="newsletter" value="newsletter"> I opt in to receiving your email newsletter from time to time.<br>
  <input type="checkbox" name="your_details" value="Car"> I agree to you storing my details securely. <br/>
  
    <br/><br/>
    
    <p>Please remember to let us know when and how is best to get hold of you.</p>
    
    <input type="submit" value="Submit">

  </form>
</div>	
		


</div>
</div> <!-- end of container --> 
<footer>
	<?php include 'includes/footer.php'; ?>
</footer>

</body>
</html>