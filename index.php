<?php
phpinfo();

include_once "markdown.php";

function curl_get_file_contents($pageUrl)
{	
	$dropboxUrl = "http://dl.dropbox.com/u/4332972/diptipur%20site%20%28don%27t%20delete%29/";
	$URL = $dropboxUrl . $pageUrl;
	$c = curl_init();
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_URL, $URL);
	$contents = curl_exec($c);
	curl_close($c);  

	if ($contents) return Markdown($contents);
	else return FALSE;
}

// How to use
// echo curl_get_file_contents("http://www.example.com/path/to/file.txt");
?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diptipur Children's Hostel</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="flexslider/flexslider.css">
	<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrap header">
	<header class="row">
		
		<nav>
			<ul>
				<li><a href="#home" class="topLink">Home</a></li>
				<li><a href="#sponsor" class="topLink">Sponsor</a></li>
				<li><a href="#support" class="topLink">Support</a></li>
			</ul>
		</nav>

		<h1>Diptipur Children's Hostel</h1>
		
	</header>
</div>

<!-- ===================== Home Section ===================== -->
<div class="wrap" id="home">

	<section class="row">

		<article class="half md">
			<?= curl_get_file_contents("home.md"); ?>
		</article>
		
		<div class="half">
			<div class="flex-container">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/slide1.jpg" alt="" /></li>
						<li><img src="images/slide2.jpg" alt="" /></li>
						<li><img src="images/slide3.jpg" alt="" /></li>
						<li><img src="images/slide4.jpg" alt="" /></li>
						<li><img src="images/slide5.jpg" alt="" /></li>
					</ul>
				</div>
			</div>
		</div>

	</section>
	
	<div style="clear:both;"></div>
	
</div>


<!-- ===================== Sponsor Section ===================== -->
<div class="wrap alt" id="sponsor">

	<section class="row">


		<h2>Sponsor a Child</h2>
		<p>Meet some of the children that the hospice has helped.</p>
		
		<ul id="sponsorShots" class="md">
			
			<?= curl_get_file_contents("children.md"); ?>
			
		</ul>

		<div style="clear:both;"></div>

	</section>
	
</div>


<!-- ===================== More Section ===================== -->
<div class="wrap">

	<section class="row">


		<article class="md">

			<?= curl_get_file_contents("sponsors.md"); ?>

		</article>

		<div style="clear:both;"></div>

	</section>
	
</div>


<!-- ===================== Chickens and Garden Section ===================== -->
<div class="wrap alt" id="support">

	<section class="row">


		<article class="half md">

			<?= curl_get_file_contents("chickens.md"); ?>

		</article>
		
		<article class="half md">
			
			<?= curl_get_file_contents("garden.md"); ?>
			
		</article>

		<div style="clear:both;"></div>

	</section>
	
</div>
<footer class="wrap">	

	<div class="row">
		<p>Copyright 2009 Your name</p>
	</div>
	
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src ="stuff.js"></script>

</body>

</html>