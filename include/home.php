<?PHP
$topslider22=MYSQLI_QUERY($connection,"SELECT * from `site_topslider` where s_id=0 and l_id='".$lng."' ORDER BY ordering desc") or die('slider islemir');
$sls=1;
?>
<div id="home-carousel" class="carousel slide border-bottom" data-ride="carousel">
<div class="carousel-inner">
<?PHP
	while($topslider=MYSQLI_FETCH_ARRAY($topslider22)){
?>
<div class="item <?PHP echo $sls; if($sls==1) {echo ' active';}?>">
	<div class="fill-slider" style="background-image:url('<?php echo $site_url;?>uploads/media/default/0001/01/2bbbb317d682ed98f7e182fe675dd91812055d47.jpg');"></div>

	<div class="carousel-caption">
	<div class="slider-title"><p>Embrace Change</p>
	<p>Drive Progress</p></div>
	<div><p>You are among the next generation of leaders</p></div>
	</div>
</div>

<?php 
	$sls++;
}?>
<a class="left carousel-control" href="#home-carousel" data-slide="prev">
<img src="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/leftab8e.png?201710241251" alt="" />
</a>
<a class="right carousel-control" href="#home-carousel" data-slide="next">
<img src="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/rightab8e.png?201710241251" alt="" />
</a>
</div>
<a class="left carousel-control" href="#home-carousel" data-slide="prev">
<img src="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/leftab8e.png?201710241251" alt="" />
</a>
<a class="right carousel-control" href="#home-carousel" data-slide="next">
<img src="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/rightab8e.png?201710241251" alt="" />
</a>
</div>
<main>
<div class="container">
<section class="couter-section text-center">
<div class="row">
<div class="col-sm-12">
<div class="joined-holder clearfix">
<h3 class="text-center font-bold fs-30 uppercase title">OneLife Members
:</h3>
<div class="joined-counter head-count color-red mb-35" data-value="3284584"></div>
</div>
</div>

<section class="bgr-section text-center short">
<div class="inner-bgr" style="background-image: url(<?php echo $site_url;?>uploads/media/default/0001/01/d01ab156147d93df91b67b6e3f4e1c0e4dd734c9.jpg);">
BUILD LONG-LASTING RELATIONSHIPS
</div>
</section>
<section class="packages-section text-center">
<div class="container">
<div class="row">
<div class="main-title">
<h2>Our Products</h2>
<span class="font-regular fs-25">Explore opportunities</span>
<div class="line"></div>
</div>
<?php
								$top_product=mysqli_QUERY($connection,'SELECT * from `elanlar` where l_id="'.$lng.'"  ORDER BY ordering desc limit 12');
								while($top_products=MYSQLI_FETCH_ARRAY($top_product))
								{	
?>
				<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="well thumbnail">
							<a href="oneacademy.html#package-1" class=""><img src="<?php echo $site_url;?>products/<?php echo $top_products['image_url'];?>" alt="" class="img-responsive" /></a>
							 <div class="caption">
							<h3 class="font-bold uppercase">
								<?php echo $top_products['name']; ?>
							<br />
							<span class="color-red">
								<?php echo $top_products['price1'] ?>$
							</span>
							</h3>
							</div>
						</div>
				</div>
<?php }?>

</div>
</div>
</section>

<section class="news-section">
<div class="container">
<div class="main-title">
<h2>LATEST NEWS</h2>
<div class="line"></div>
</div>
<div class="row news-listing">
	<?php
							$xeberler22=mysqli_QUERY($connection,'SELECT * from `site_xeberler` where l_id="'.$lng.'" and status=0 and checkbox=1 ORDER BY ordering desc limit 12');
							while($xeberler=MYSQLI_FETCH_ARRAY($xeberler22))
							{	
							 ?>
			<div id="article-902" class="col-md-3 col-sm-6">
				<article class="well thumbnail">
					<a href="<?PHP echo $site_url.$lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/" class="fix-thumb-img">
					<img alt=""  src="<?php echo $site_url;?>products/<?php echo $xeberler['photo'];?>" width="350" height="216" class="img-responsive" />
					</a>
					<!-- <div class="status">Company News</div> -->
					<div class="caption">
						<h3 class="font-bold fs-20 mb-10 color-red uppercase">
						<a href="<?PHP echo $site_url.$lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/" class="color-red"><?php echo $xeberler['name'] ?></a>
						</h3>
						<p class="font-regular">
						<?php echo $xeberler['description'] ?>
						</p>
					</div>
				</article>
			</div>

	<?php }?>
</div>
</div>
</section>
<section id="outer-wrap" class="bgr-video-section">
<div id="video-wrap">
<video id="my-video" preload="metadata" autoplay="autoplay" loop="loop" poster="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/video/imgab8e.jpg?201710241251">
<source src="https://video.onelife.eu/bundles/onecoinonelifeopen/images/video/Opportunity_New_1.mp4" type="video/mp4">
</video>
<a href="opportunity.html" class="">A POWERFUL OPPORTUNITY</a>
</div>
</section>

</main>