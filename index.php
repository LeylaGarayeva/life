<?PHP
	include('conf.php');
	if(isset($_POST['lng']) && in_array($_POST['lng'],['az','en','ru'])){
		$_GET['lng'] = $_POST['lng'];
		// die($_GET['lng']);
	}

	if(@$_GET['lng'])
	{
		if(in_array($_GET['lng'],ARRAY('az','ru','en')))	{$lng2=strip_tags($_GET['lng']);}
		else{$lng2='az';}
		switch ($lng2)
		{
			case 'az': $lng=1; break;
			case 'ru': $lng=2; break;
			case 'en': $lng=3; break;
		}
	}
	else{$lng=1;$lng2='az';}
	if(@$_POST['search']){
	@$input_text = trim($_POST['search']);
	@$input_text = strip_tags($input_text);
	@$input_text = htmlspecialchars($input_text);
	@$search = mysql_escape_string($input_text);
	}
	
	if(empty($_GET['page']))
	{ 
		$axtaris='';


	}
	else
	{
		$axtaris=''.$site_url.$lng2.'/pages/home/';
	}
	
	if(@$_GET['page'])
	{ 

		switch($_GET['page'])
		{
			case 'pages': 
				$page='pages'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'xeber': 
				$page='xeber'; 		
				$ll='u_id'; 	
				$tbn='site_xeberler';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'support_email': 
				$page='support_email'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'shop': 
				$page='shop'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'order': 
				$page='order'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'basket': 
				$page='basket'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'shop_category': 
				$page='shop_category'; 		
				$ll='kat_id'; 	
				$tbn='kateqoriyalar';		
				$def=1; $www='kat_id';	
				$qqq='url_tag';	
				break;
			case 'single': 
				$page='single';		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'xeber': 
				$page='xeber'; 		
				$ll='u_id'; 	
				$tbn='site_xeberler';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			default:
				$page='home'; 		
				$ll='u_id';		
				$tbn='site_menu';		
				$def=1;	$www='u_id';	
				$qqq='url_tag'; 
				break;
		}
	}
	else{
		$page='home'; 
		$ll='u_id'; 	
		$tbn='site_menu'; 
		$def=1; $www='u_id'; 
		$qqq='url_tag';	
	}
	if($page!='search'){
		$$ll=@addslashes(strip_tags($_GET['val']));
		$sorgu = "select * from `".$tbn."` where l_id='".$lng."' and status=0";
		// die($sorgu);
		$sql=MYSQLI_QUERY($connection,$sorgu) or die('xeta url ');
		$d_massiv=array();
		while($b=MYSQLI_FETCH_ASSOC($sql))
		{	
			if($page=='shop_category'){
				$tt=$b['kat_id'];
				$d_massiv[$tt]=$b;
				if($b['url_tag']==$$ll and $b['url_tag']!=''){	$$ll=$b['kat_id']; $t1=2;}
			}
			// 
			else{
				$tt=$b['u_id'];
				$d_massiv[$tt]=$b;
				if($b['url_tag']==$$ll and $b['url_tag']!=''){	$$ll=$b['u_id']; $t1=2;}
			}
		}
		if(@$t1!=2){
			$$ll=$def;	
		}
		if(!empty($_GET['page']) && isset($_POST['lng']) && in_array($_POST['lng'],['az','en','ru'])){
			if(!empty($_GET['val'])){
				header('Location: '.$site_url.$lng2.'/'.$_GET['page'].'/'.$_GET['val'].'/');
			}else{
				header('Location: '.$site_url.$lng2.'/'.$_GET['page'].'/');
			}
		}
	}

	/*****************************************************************************************/
	
	if(empty ($_GET['page'])){
		$_GET['page']='pages'; $def_m_a=0;
	}else{
		$def_m_a=1;
	}
	//dil linklerini duzeltmek ucun funksiya
	$str='';
	$str.='/'.$_GET['page'].'/';

// die($_GET['page']
// };	
?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Organization">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta name="keywords" content="" />
<meta property="og:description" content="OneLife Description" /> <meta itemprop="description" content="OneLife Description"> <meta name="twitter:description" content="OneLife Description" />
<meta property="og:image" content="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/logo.png" /> <meta property="og:image:width" content="300px" /> <meta property="og:image:height" content="200px" /> <meta itemprop="image" content="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/logo.png" /> <meta name="twitter:image" content="<?php echo $site_url;?>bundles/onecoinonelifeopen/images/logo.png" />
<meta property="og:title" content="Home Page | OneLife" /> <meta itemprop="name" content="Home Page | OneLife" /> <meta name="twitter:title" content="Home Page | OneLife" /> <title>Home Page | OneLife</title>
<link rel="icon" href="https://www.onelife.eu/favicon.ico?201710241251" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $site_url;?>assets/css/compiledab8e.css?201710241251" />
<script src="<?php echo $site_url;?>assets/js/compiledab8e.js?201710241251"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body itemtype="http://schema.org/WebPage" itemscope="">
<div class="site-size">

	<?php include('./include/header.php');?>
	<?php include("./include/$page.php");?>
	<?php include('./include/footer.php');?>



<script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

                    ga('create', 'UA-54134897-2', 'auto');
                    ga('send', 'pageview');

                </script>
</div>
</body>
</html>
