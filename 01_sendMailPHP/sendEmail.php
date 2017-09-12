<?php
//load vars
$name = $_POST[name];
$email = $_POST[email];
$date = $_POST[date];
$location = $_POST[location];
$story = $_POST[story];
$ufo = $_POST[ufo];

//BUILD EMAIL
$to = 'austinbroadhead97@gmail.com';
$subject = 'Report Abduction';
$message = "$name has reported an abduction on $date, from $location. They saw a $ufo shaped UFO. The following story was shared - $story. Contact them at $email.";

//SEND
mail($to, $subject, $message, 'FROM:'.$email);

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>01 Send Mail PHP</title>

<!-- LOAD GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,600" rel="stylesheet"> 

<!-- LATEST VERSION OF JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

<!-- META TAGE FOR DO NOT LIE -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!--', maximum-scale=1' prevents users zooming on mobile-->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- STYLE SHEETS -->
<link href="css/reset.css" rel="stylesheet">
<link href="css/phone-default.css" rel="stylesheet">
<link href="css/tablet.css" rel="stylesheet">
<link href="css/desktop.css" rel="stylesheet">

</head>
<body>

<div class="container">
	<header>
	<h1>Report an Abduction</h1>
	</header>

	<nav>
	<!-- Put stuff here for links -->
	</nav>

	<div class="contentBG">
	<img class="ufoImg" src="images/ufo.png">
	<div class="content">
		<p>Thanks <?php echo $name; ?>, for sharing your story with us. You shared the following info about your abduction:</p>
		<p>date: <?php echo $date; ?></p>
		<p>location: <?php echo $location; ?></p>
		<p>shape: <?php echo $ufo; ?></p>
		<p>story: <?php echo $story; ?></p>
		<p>For further questions, we may contact you at <?php echo $email ?></p>
	</div> <!-- end content wrapper -->
	</div>

	<footer>
		2017 &bull; Austin Broadhead &bull; DGM 3760
	</footer>
</div> <!-- end container -->

</body>
<script type="text/javascript" src="js/main.js"></script>
</html>