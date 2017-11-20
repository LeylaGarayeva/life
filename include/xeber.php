<?php 
if(isset($page) && $page=='xeber'){
	// die($u_id);
	if(isset($u_id) && is_numeric($u_id)){
		$sql = "select * from `site_xeberler` where l_id='".$lng."'  and status='0' and u_id='".$u_id."' limit 1";
	$result = mysqli_fetch_assoc(mysqli_query($connection,$sql)) or die('bele xeber yoxdur');
?>
	
	<div class="wallpaper-inner" style="background-image: url(<?php echo $site_url;?>bundles/onecoinonelifeopen/images/wallpaper/pageab8e.jpg?201710241251); min-height: 250px;"></div>
<div class="container">
<article class="text-section mt-40 mb-40" itemscope itemtype="http://schema.org/Article">
<div class="row">
<div class="col-sm-5">
<div class="zoom-gallery mb-20">
<a href="<?php echo $site_url;?>uploads/media/default/0001/01/40b00a30bacf4b26765cd2242648e0300b4b8415.jpg" class="image-effect">
<img src="<?php echo $site_url;?>products/<?php echo $result['photo'];?>" alt="" itemprop="image" />
<span class="zoom-image"><i class="fa fa-search"></i></span>
</a>
</div>
</div>
<div class="mr-20 ml-20">
<h3 class="font-bold fs-20 mb-20 color-red uppercase" itemprop="name">
	<?php echo $result['name'] ?>
</h3>
<div class="">
<time class="bottom10 color-blue inline-block fs-20" datetime="2017-09-06T06:32:22+00:00">
<?php echo $result['current_date'] ?>
<span class="color-red">|</span>
<!-- <a href="../news7a81.html?category=1" class="underline color-blue">Company News</a> -->
</time>

</div>
<div class="news-detail-text styled-dynamic-text" itemprop="articleBody"><p><span style="font-family:monospace; font-size:12px"><?php echo $result['text'];?></span><br />
<br />
</div>
</div>
<a href="<?php echo $site_url;?>" class="inline-block mt-10 mb-10 mr-30 pull-right">&#10094; Back to all news</a>
</div>
</article>
</div>
	<?php 
	}else{
		die('bele bir xeber tapilmadi');
	}
}else{

	
}
?>