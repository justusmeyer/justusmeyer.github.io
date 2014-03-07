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
		<li><img src="/images/homepage/Hub1.jpg">
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>We pride ourselves on offering the highest quality bicycle service in the Tetons<a class="more" href="/shop.php">more</a></p>
			</div>
		</li>
		<li><img src="../images/homepage/Hub3.jpg"/>
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Join us for the annual Jackson bike swap every May<a class="more" href="/swap.php">more</a></p>
			</div>
		</li>
			<li><img src="../images/homepage/Hub2.jpg"/>
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Join us for the annual Jackson bike swap every May<a class="more" href="/swap.php">more</a></p>
			</div>
		</li>
		<li><img src="../images/homepage/Hub3.jpg"> 
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Check out our favorite videos from around the Jackson area<a class="more" href="/videos.php">more</a></p>
			</div>
		</li>
		<li><img src="../images/homepage/Hub4.png"> 
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Find all about our recent happenings on our blog<a class="more" href="/blog.php">more</a></p>
			</div>
		</li>
		<li><img src="../images/homepage/Hub5.png"> 
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Join us for group rides every Tuesday all summer<a class="more" href="/group.php">more</a></p>
			</div>
		</li>
		<li><img src="../images/homepage/Hub6.jpg"> 
			<div class="slide-desc">
				<h2>Welcome to the Hub</h2>
				<p>Check out recent photos from our friends<a class="more" href="/photos.php">more</a></p>
			</div>
		</li>	
	</ul>
</div>	
					<hr />
<div class="row">
	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="smaller">
					Annual Bike Swap
					<small>A few months away from the Jackson hole annual bike swap</small>
				</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<img src="../images/swap/swap.png" width="100%" height="300px">

					<hr />
					<p>
					<a href="/swap.php">
						<span class="btn btn-sm btn-inverse" data-rel="tooltip" title="Default">More</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div><!-- /span -->

	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="smaller">
					New Arrivals
					<small>Explore our 2014 road bikes</small>
				</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main" >
					<img src="../images/swap/swap3.jpg" width="100%" height="300px">

					<hr />
					<p>
						<span class="btn btn-sm btn-inverse" data-rel="tooltip" title="Default">More</span>
					</p>
				</div>
			</div>
		</div>
	</div><!-- /span -->
</div><!-- /row -->


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





