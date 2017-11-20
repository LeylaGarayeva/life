 <?php 
if(isset($u_id) && $u_id!=""){
	$sql = "select * from `site_menu` where l_id='".$lng."'  and status='0' and u_id='".$u_id."' limit 1";
	// die($sql);
	$result = mysqli_fetch_assoc(mysqli_query($connection,$sql)) or die('bele menu yoxdur');

 ?> 
 	<div class="border-bottom wallpaper-inner" style="background-image: url(<?php echo $site_url;?>uploads/media/default/0001/01/b11ee0797d8a86944cfe52af7d7fb1c1000c7d58.jpg);">
		<div class="relative">
			<div class="inner-position">
			<h1 class="header-big uppercase font-bebas-bold">
			<?php echo $result['name'] ?>
			</h1>
			<div class="text"> <p><?=$result["text"]?></p></p> </div>
			</div>
		</div>
</div>
<?php
}else{
	//
}
?>


