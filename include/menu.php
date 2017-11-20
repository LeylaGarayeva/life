<div class="main-line">
<div class="container">
<div class="row">
<nav class="navbar" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand navbar-left" href="<?php echo $site_url;?>">
<img title="" alt="oneLife" src="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/logoab8e.png?201710241251" itemprop="logo" class="logo">
</a>

</div>
<div id="navbar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav  navbar-right">
		<?php
				
				@$sql568=mysqli_QUERY($connection,"select * from `site_menu` where l_id='".$lng."' and tip='1' and status='0' and url_tag='".$_GET['val']."' limit 1");
				$b5985=MYSQLI_FETCH_ASSOC($sql568);

				$sql=mysqli_QUERY($connection,"select * from `site_menu` where l_id='".$lng."' and tip='1' and status='0' and sub_id='0' order by `ordering`asc");

				while($b=MYSQLI_FETCH_ASSOC($sql)){
					
					
					if(!empty($b['link'])){
						$lh=$site_url.$lng2.'/'.$b['link'].'/';
					}
					else{
						$lh=$site_url.$lng2.'/pages/'.$b['url_tag'].'/';
					}
						$sql11=mysqli_QUERY($connection,"select * from `site_menu` where l_id='".$lng."' and tip='1' and status='0' and sub_id='".$b['u_id']."' order by `ordering`asc");
						
						if($def_m_a==0 and $b['u_id']==1){$active='class="active"';}
						else{
							if($b['url_tag']==@$_GET['val']){$active='class="active"';} else{$active='';}
						}
						if(mysqli_num_rows($sql11)>0){
						
							
						if($b5985['sub_id']==$b['u_id']){$active='class="active"';} else{$active='';}
							
							echo '<li '.$active.'><a>'.$b['name'].'</a>';
						}
						else{
					echo'
				                                 
					<li '.$active.'><a href="'.$lh.'">'.$b['name'].'</a>';
						}
						
						
					
				if(mysqli_num_rows($sql11)>0){  }
				else{}
					
						$sql2=mysqli_QUERY($connection,"select * from `site_menu` where l_id='".$lng."' and tip='1' and status='0' and sub_id='".$b['u_id']."' order by `ordering`asc");
						while($b2=MYSQLI_FETCH_ASSOC($sql2)){
						if(!empty($b2['link']))	{
							$lh=$site_url.$lng2.'/'.$b2['link'].'/';
						}
						else{

							$lh=$site_url.$lng2.'/pages/'.$b2['url_tag'].'/';
						}
						
						
							echo'<li><a href="'.$lh.'">'.$b2['name'].'</a></li>';
						
							
															}
					if(mysqli_num_rows($sql11)>0){ }
					else{}
				echo'</li>
					
				';}?>

					<li class="last"> <span>
			<button type="button" id="loginBtn" class="btn red-btn login-btn btn-lg" data-toggle="modal" data-target="#login-modal">LOGIN
			</button>
			</span>
			</li>
			</ul>
		</div>
	</nav>
</div>
</div></div>
	<!-- <li class="active first"> <a href="<?php echo $site_url;?>l">
	Home</a></li>
	<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	About<b class="caret"></b></a>
		<ul class="menu_level_1 dropdown-menu">
		<li class="first"> <a href="about.html">
		Our culture</a></li>
		<li class="last"> <a href="faq.html">
		FAQ</a></li>
		</ul>
	</li>
	<li class="last"> <span>
	<button type="button" id="loginBtn" class="btn red-btn login-btn btn-lg" data-toggle="modal" data-target="#login-modal">LOGIN
	</button>
	</span>
	</li>
</ul>
</div>
</nav>
</div>
</div>
</div> -->