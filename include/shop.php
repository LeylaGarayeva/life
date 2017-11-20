 <br><br>
<div class="border-bottom wallpaper-inner" style="background-image: url(<?php echo $site_url;?>uploads/media/default/0001/01/b11ee0797d8a86944cfe52af7d7fb1c1000c7d58.jpg);">
<div class="relative">
<div class="inner-position">
	<div class="row">
							<?php
								$country=mysqli_QUERY($connection,'SELECT * from `olkeler` where l_id="'.$lng.'" and sub_id=0 ORDER BY ordering desc');
								while($country_list=MYSQLI_FETCH_ARRAY($country))
								{	
 							?>
		
						<div class="col col_1 col-md-4">
								<div class="image"><a href="<?PHP echo $lng2; ?>/shop_category/<?PHP echo $country_list['url_tag'] ; ?>/"><!--  <img src="<?php echo $site_url;?>products/<?php echo $country_list['image_url'];?>" alt=""> --></a></div>
								<div class="text"><a href="<?PHP echo $site_url.$lng2; ?>/shop_category/<?PHP echo $country_list['url_tag'] ; ?>/"><?php echo $country_list['name'];?></a></div>

								
						</div>

						<?php }?>
			</div>
		</div>
</div>
</div>
