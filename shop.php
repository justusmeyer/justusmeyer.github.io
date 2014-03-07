<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>The Hub Bikes About Us</title>

<style>
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
</style>

</head>

<body>

<?php include('outline/header.php'); ?>

<div id="prime">
<h1>Our Shop</h1>
<div id="demo" class="skdslider">
	<ul>
		<li><img src="../images/aboutus/shop1.jpg"></li>
		<li><img src="../images/aboutus/shop2.jpg"/></li>
		<li><img src="../images/aboutus/shop3.jpg"></li>
	</ul>
</div>

<div id="content">
	<p>We pride ourselves on offering the highest quality bicycle service in the Tetons. Every bike brought in the shop is attended to by a mechanic with many years of wrenching experience. We understand your bike means a lot to you and treat it as if it was our own.</p>
	<p>Your bike will be tended to by either a European Mechanic with over 20 years of experience or the owner with over 15 years of experience.</p>
	<p>If you&#39;d like work on your bike please call us to make an appointment. Once you make an appointment, you drop the bike off that morning (or the previous evening) and it&#39;ll be ready that evening.</p>
	<p>First time customer? Come on in to schedule an appointment so we can get to know the bike.</p>
</div>
	
<?php include('outline/footer.php'); ?>
</div>

<script type="text/javascript">
	if("ontouchend" in document) document.write("<script src='/javascripts/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo').skdslider({'delay':5000, 'fadeSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoStart':true});
			jQuery('#demo1').skdslider({'delay':5000, 'fadeSpeed': 2000,'autoStart':true,'pauseOnHover':true});
		});
</script>

</body>

</html>
	