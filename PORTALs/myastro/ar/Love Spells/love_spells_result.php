<?php include_once '../phpcode/Classes/lovespells.php'; ?>
<?php 
	//for address
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', substr($_SERVER['REQUEST_URI_PATH'], 1));
	$url2=$segments[0];
	$url1= $actual_link;
	if(isset($_GET['id']) && !empty($_GET['id'])) {
		$id=$_GET['id'];
		$lovespells=new Lovespells();
		$result=$lovespells->getData($id);
		if(isset($result)){
			$ab_name=$result['ab_name'];
			$ab_desctitle=$result['ab_desctitle'];
			$ab_desc=$result['ab_desc'];
			$ab_recipetitle=$result['ab_recipetitle'];
			$ab_recipe=$result['ab_recipe'];
			$ab_did_you_know=$result['ab_did_you_know'];
			$ab_dyk="هل تعلم؟";
		}
	}
	else{
		header("Location:".$url1."/".$url2."/love_spells.html");
		exit();
    }
?>

<!DOCTYPE html>
<html lang="ar">
<head>
	<title>عواطف الحب</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="/Content/css/slick.css">
	<link rel="stylesheet" type="text/css" href="/Content/css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="/Love Spells/css/love_spells_result.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/main.css">
	<link rel="stylesheet" type="text/css" href="/Content/css/gif-banner.css">
</head>
<body>

<div class="container">
	<!--NAVBAR-->
	<div class="row">
		<div class="tag-logo">	
			<div class="col-xs-12 nav-logo">
				<a href="/index.html"><img style="width: 95px; margin-top: 8px;" src="/Content/img/logo_bigger.png"></a>
				<a href="/Account Page/accountpage_subscribed.html"><img src="/Content/img/avatar.png" class="nav-avatar"></a>
			</div>
		</div>
	</div>
		
	<!--NUMEROLOGIA-->
	<div class="row">

	<div class="spell-result col-xs-12">
		<div class="info-container">
			<div dir="rtl" class="spell-result-title">الحب نوبات</div><!--LOVE SPELLS TITLE-->
			<div class="col-xs-12">
				<p class="text-center" dir="rtl" style="font-size: 8vw; color:white;"><?php if(isset($ab_name) && !empty($ab_name)){echo $ab_name; } ?></p><!--SPELL NAME-->
			</div>
			<div class="col-xs-12">
				<div dir="rtl" class="spell-text-result">
					<p dir="rtl" class="spell-question"><?php if(isset($ab_desctitle) && !empty($ab_desctitle)){echo $ab_desctitle; } ?></p><!-- "WHAT IS IT?" -->

					<p dir="rtl"><?php if(isset($ab_desc) && !empty($ab_desc)){echo $ab_desc; } ?>
					</p><!--INFO ABOUT PLANT-->

					<p dir="rtl" class="spell-question"><?php if(isset($ab_recipetitle) && !empty($ab_recipetitle)){echo $ab_recipetitle; } ?></p><!-- "HOW TO DO?" -->

					<p dir="rtl"><?php if(isset($ab_recipe) && !empty($ab_recipe)){echo $ab_recipe; } ?>
					</p><!-- SPELL RECIPE-->
					
					<p dir="rtl" class="spell-question"><?php if(isset($ab_dyk) && !empty($ab_dyk)){echo $ab_dyk; } ?></p><!-- "Do you know?" -->

					<p dir="rtl"><?php if(isset($ab_did_you_know) && !empty($ab_did_you_know)){echo $ab_did_you_know; } ?>
					</p><!-- do you know detail-->


				</div>
				</br>
			</div>
			<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All%20Content/play_content.html">
				<div class="col-xs-12 nopad">
					<img src="/Homepage/img/300x250_ar_games_64.gif" class="s-lover" alt="img">
				</div>
			</a>
		</div>
	</div>

	<!--Em Destaque
		<div class="highlight-tag">Highlights</div>
		-->
		<!--Dynamic Game Section
		<div class="row">
			<div class="col-xs-12">
				<div class="game-section">
					<a href="/Category List/category list page.html">
					<div class="col-xs-6 game-container">
						<img src="/Homepage/img/img3.jpg" style="width: 100%;">
						<p class="game-text">Your Daily Horoscope</p>
					</div>
				</a>
				<a href="/Content/numerologia.html">
					<div class="col-xs-6 game-container">
						<img src="/Homepage/img/img3.jpg" style="width: 100%;">
						<p class="game-text">Numerology</p>
					</div>
				</a>
				</div>	
			</div>
		</div>
		-->

		<div class="col-xs-12 searchTest no-result"></div>

		<!--Search Input-->
		<div class="row">
			<div class="col-xs-12">
				<div class="search-container">
					<input class="searchBar" dir="rtl" type="search" name="MyAstroSearch" placeholder="ما الذي تبحث عنه">
					<button class="lupa">
					<!--
						<img src="/Content/img/mag_glass.png" style="width: 100%;">
						-->
					</button>
				</div>
			</div>
		</div>
	</div>

	<!--Bottom Buttons-->
	<div class="row" style="background: white; padding:5px 0;">
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">	
			<button onclick="goBack()" class="back-home">
			<img src="/Content/img/arrow_left.png" style="width: 15px"><span dir="rtl" style="display: inline-block;">
			الرجوع</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span dir="rtl">عد لأعلى</span>
			<img src="/Content/img/arrow_up.png" style="width: 15px">
			</button>
		</a>	
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="/index.html">
			<button class="back-home"><span dir="rtl">الرئيسية</span>
			<img src="/Content/img/house.png" style="width: 15px">
			</button>
		</a>	
		</div>
	</div>

	<!--Image Footer-->
	<div class="row">
		<div class="footer">
			<div class="col-xs-6">
				<a dir="rtl" href="/Account Page/accountpage_subscribed.html" class="ftext">الحساب الشخصي</a>
			</div>
			<!--
			<div class="col-xs-4">
				<a dir="rtl" href="/Help and T&C/help.html" class="ftext">مساعدة</a>
			</div>
				
			-->
			<div class="col-xs-6">
				<a dir="rtl" href="/Help and T&C/T&C.html" class="ftext">الشروط و الأحكام</a>
			</div>
			<a href="/index.html">
				<img class="astro-footer" src="/Homepage/img/logo_bigger.png">
			</a>
		</div>
	</div>

</div><!--END CONTAINER-->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="/Homepage/js/slick.min.js"></script>
	<script type="text/javascript" src="/Homepage/js/main.js"></script>

</body>
</html>