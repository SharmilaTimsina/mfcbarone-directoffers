<?php 	
try{
	if (! @require_once( '/var/www/html/zmobs/lp/configs/portal_acl.php' )) throw new Exception ('This page is not available at the moment');
}catch(Exception $e){
	echo '<h1>Opss</h1><h3>This page is not available at the moment</h3>';
	exit();
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
	<title>Homepage - Smartphone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/slick.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/main.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/myastro-slider.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/find-button.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/thermo-lover.css">
	<link rel="stylesheet" type="text/css" href="/Homepage/css/predictions.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

<div class="container">
	<!--NAVBAR-->
	<div class="row">
		<div class="tag-logo">	
			<div class="col-xs-12 nav-logo">
				<a href="index.html"><img style="width: 95px; margin-top: 7.5px;" src="/Homepage/img/logo_bigger.png"></a>
				<a href="/Account Page/accountpage_subscribed.html"><img src="/Homepage/img/avatar.png" class="nav-avatar"></a>
			</div>
		</div>
	</div>

	<!--
	<div class="col-xs-12 nav-logo">
		<img style="width: 80px;" src="../Homepage/img/logo_bigger.png">
	</div>
	-->

	<!--MYASTRO SLIDER-->
	<div class="row">
		<div id="mobiSlider">
		<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All%20Content/play_content.html">
			<div>
				<img src="/Homepage/img/300x250_ar_games_63.gif" class="s-lover" alt="img">
			</div>
		</a>
		<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All%20Content/play_content.html">
			<div>
				<img src="/Homepage/img/300x250_ar_games_64.gif" class="s-lover" alt="img">
			</div>
		</a>
		<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All%20Content/play_content.html">
			<div>
				<img src="/Homepage/img/300x250_ar_games_65.gif" class="s-lover" alt="img">
			</div>
		</a>
		</div>
	</div><!--END SLIDER ROW-->
		
	<!--SECRET LOVER-->
	<div class="row">
		<div style="position: relative;">
			<img src="/Homepage/img/home_highlight_ar.png" style="width:100%; height: auto;">
			<div class="col-xs-12" style="position: absolute; top: 77%;">
				<a href="http://www.zmobs.com/ptesting/Build_2017_08_12_03_39_ar/index.php">
					<button dir="rtl" class="pfind-out">إضغط هنا</button>
				</a>
			</div>
		</div>

		<!--Themo Lover-->
		<div class="row">
			<div class="col-xs-12">
				<div class="tag" style="margin:0; margin-top: -2px;"><p dir="rtl">مقياس العاشق</p><!--<img style="padding-left: 4px;" src="../Homepage/img/HEARTS.png">--></div>
			</div>
		</div>

		<!--Themo image-->
		<div class="row">
			<div style="position: relative;">
				<div class="col-xs-12" style="position: relative;">
					<img src="/Homepage/img/second_highlight.png" style="width:100%; height: auto;"><!--THEMO IMAGE-->
					<div class="col-xs-6" style="float: right;">
						<div style="position: relative;">
							<div class="col-xs-12">
								<p class="tbanner" dir="rtl">تفقد مدى حرارة عشقك</p>
							</div>

							<div class="col-xs-12">
								<a href="/Thermo Lover/termometro_do_amor.html"><button class="find-out"><span dir="rtl">اكتشف</span></button></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<!--More section-->
		<div class="row">
			<div class="col-xs-12" style="position: relative;">
				<div dir="rtl" class="col-xs-12 tag">
					<p>مزيد من التوقعات</p>
					<a href="/Content/content.html"><button class="more"><span dir="rtl">المزيد</span><img style="padding-left: 1px; transform: rotate(-90deg); width: 15px" src="/Homepage/img/arrow_left.png">
					</button></a>
				</div>
			</div>
		</div>

		<!--Dynamic Game Section-->
		<div class="row">
			<div dir="rtl" class="col-xs-12 searchTest no-result">
				<div class="col-xs-12">
					<div class="game-section">
					<a href="/Horoscope/horoscope.html">
						<div class="col-xs-6 game-container">
							<img src="/Homepage/img/daily_horoscope.png" style="width: 100%;">
							<p class="game-text" dir="rtl">أبراجك اليومية</p>
						</div>
					</a>
					<a href="/Numerology/numerologia.html">
						<div class="col-xs-6 game-container">
							<img src="/Homepage/img/numerology.png" style="width: 100%;">
							<p class="game-text" dir="rtl">علم الأعداد</p>
						</div>
					</a>
					</div>
				</div>	
			</div>
		</div>

		<!--Search Input-->
		<div class="row">
			<div class="col-xs-12">
				<div class="search-container">
					<input class="searchBar" type="search" dir="rtl" name="MyAstroSearch" placeholder="ما الذي تبحث عنه ">
					<button class="lupa">
					<!--
						<img src="../Homepage/img/mag_glass.png" style="width: 100%;">
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
			<img src="/Homepage/img/arrow_left.png" style="width: 6vw"><span dir="rtl" style="display: inline-block;">
			الرجوع</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span dir="rtl">عد لأعلى</span>
				<img src="/Homepage/img/arrow_up.png" style="width: 6vw">
			</button>
		</a>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
			<a href="index.html">
				<button class="back-home"><span dir="rtl">الرئيسية</span>
					<img src="/Homepage/img/house.png" style="width: 6vw">
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
				<a dir="rtl" href="../Help and T&C/help.html" class="ftext">مساعدة</a>
			</div>
				
			-->
			<div class="col-xs-6">
				<a dir="rtl" href="/Help and T&C/T&C.html" class="ftext">الشروط و الأحكام</a>
			</div>
			<a href="index.html">
				<img class="astro-footer" src="/Homepage/img/logo_bigger.png">
			</a>
		</div>
	</div>

</div><!--END CONTAINER-->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/Homepage/js/slick.min.js"></script>
	<script type="text/javascript" src="/Homepage/js/main.js"></script>


</body>
</html>