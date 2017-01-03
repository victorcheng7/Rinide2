<?php
include_once('index.html');
require('mailin.php');
$result = array("code" => "" );
$input = isset($_POST["inputText"]) ? $_POST["inputText"] : "j";

if(isset($_POST['SubmitButton'])){
$mailin = new Mailin("https://api.sendinblue.com/v2.0", "DkTr9tnFAc0I5s7O", 5000);
  $data = array( "email" => $input,
        "attributes" => array("NAME"=>"name", "SURNAME"=>"surname"),
        "listid" => array(1,4,6),
        "listid_unlink" => array(2,5)
    );
$result = $mailin->create_update_user($data);
    if($result["code"] == "success"){
        echo '<div class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
              </div>';
    }
    else{
        echo '<div class="alert alert-danger">
                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
              </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Rinide</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta http-equiv="content-language" content="en-US"/>
<meta http-equiv="default-style" content="pref"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="window-target" content="_top"/>
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="noodp"/>
<meta name="rating" content="general"/>
<meta name="Cache-control" content="Public"/>
<meta name="distribution" content="web"/>
<meta name="target" content="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="subject" content="Rinide"/>
<meta name="keywords" content=""/>
<meta name="description" content=""/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles/reset.css">
<link rel="stylesheet" href="styles/ico_moon.css">
<link rel="stylesheet" href="styles/main.css">

<script src="scripts/jquery.js"></script>
<script src="scripts/easing.js"></script>
<script src="scripts/main.js"></script>

</head>
<body onunload="">

<section class="header full centered">
	<div class="container ">
		<div class="row">
			<div class="info-block col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h1>
					<img src="images/logo.jpg" alt="" class="info-logo">
					Rinide
				</h1>
				<p class="about">Rideshare made simple. The rides you post directly notify the people that need it. No more no-shows. No more wasted time and effort trying to find rides.</p>
				<a href="#subscribe" class="action-btn btn">Join the Waitlist</a>
			</div>
			<div class="image-block col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="iphone-design" id="filters">
					<img src="images/filter_2.png" alt="">
				</div>
				<div class="iphone-design" id="listings">
					<img id="notification" src="images/notification.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="container">
	<h2 class="title">Core Features</h2>
	<div class="row">
		<div class="feature feature-alert col-xs-12 col-sm-6 col-md-4">
			<img src="images/feature-alert.jpg" alt="">
			<h3>Instant Notifications</h3>
			<p>Instant notifications when a new shared ride is relevant to you. Our smart algorithm finds rides on the way or to your location.</p>
		</div>
		<div class="feature col-xs-12 col-sm-6 col-md-4">
			<img src="images/feature-payment.jpg" alt="">
			<h3>Preventing No-shows</h3>
			<p>Preventing no-shows by having riders and drivers put up an initial deposit.</p>
		</div>
		<div class="feature feature-waitlist col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
			<img src="images/feature-waitlist.jpg" alt="">
			<h3>Ride Waitlist</h3>
			<p>Join a ride waitlist and recieve an instant notification when your spot opens.
			</p>
		</div>
	</div>
	</div>
</section>

<section id="subscribe" class="subscribe">
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h2 class="title">Limited Waitlist</h2>
			<p>Help Rinide become a reality for you. Leave us your email and you'll be the first ones to know when Rinide is released.</p>
		<form action="" method="post" >
			<input class="email" type="text" name = "inputText" placeholder="email">
			<input class="btn" type="submit" name= "SubmitButton" value="Submit">
		</form>
	</div>
	</div>
	</div>
</section>

<section class="footer container">
	<li class="icon-facebook2"></li>
</section>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
