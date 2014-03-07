<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>The Hub Bikes</title>

<style>
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
</style>

</head>

<body>

<?php include('outline/header.php'); ?>

<div id="prime">
<div id="demo" class="skdslider">
	<ul>
		<li><img src="images/aboutus/shop1.jpg">
			<div class="slide-desc">
				<h2>Group Rides</h2>
				<p>Find all about our recent happenings on our blog</p>
			</div>
		</li>
		<li><img src="images/aboutus/shop2.jpg"/>
			<div class="slide-desc">
				<h2>Group Rides</h2>
				<p>Find all about our recent happenings on our blog</p>
			</div>
		</li>
		<li><img src="images/aboutus/shop3.jpg">
			<div class="slide-desc">
				<h2>Group Rides</h2>
				<p>Find all about our recent happenings on our blog</p>
			</div>
		</li>
	</ul>
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
