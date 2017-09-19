<?php  include_once '../phpcode/Classes/thermometerlove.php'; ?>
<?php 
	
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', substr($_SERVER['REQUEST_URI_PATH'], 1));
	$url2=$segments[0];
	$url3=$segments[1];
	$url1= $actual_link;
	if(isset($_POST['firstname'])&&  !empty($_POST['firstname']) && isset($_POST['secondname']) && !empty($_POST['secondname'])){
		$thermolove=new Thermometerlove();
		$result=$thermolove->getData($_POST['firstname'],$_POST['secondname']);
	    if(isset($result)){
			$compatibility= $result['compatibility'];
			$significance=$result['significance'];
		}
	}
	else{
		header("Location:".$url1."/".$url2."/".$url3."/Thermo Lover/termometro_do_amor.html");
		exit();
    }
?>


<!DOCTYPE html>
<html lang="ar">
<head>
	<title>مقياس الحب</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="../Content/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../Content/css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../Thermo Lover/css/termometro_result.css">
	<link rel="stylesheet" type="text/css" href="../Homepage/css/main.css">
	<link rel="stylesheet" type="text/css" href="../Homepage/css/predictions.css">

<body>

<div class="container">
	<!--NAVBAR-->
	<div class="row">
		<div class="tag-logo">	
			<div class="col-xs-12 nav-logo">
				<a href="../Homepage/smartphone.html"><img style="width: 95px; margin-top: 8px;" src="../Content/img/logo_bigger.png"></a>
				<a href="../Account Page/accountpage_subscribed.html"><img src="../Content/img/avatar.png" class="nav-avatar"></a>
			</div>
		</div>
	</div>
		
	<!--NUMEROLOGIA RESULT-->
	<div class="row">

	<div class="termometro-result col-xs-12">
		<div class="info-container">
			<div class="thermo-result-title"><span dir="rtl">مقياس الحب</span></div>
			<div class="heart-result-img"><span class="heart-text"><?php if(isset($compatibility))echo $compatibility."%";?></span></div>
			<div class="heart-result-text" dir="rtl"><?php if(isset($significance))echo $significance; ?></br>
			</div>
		</div>
	</div>

	<!--Em Destaque
		<div class="highlight-tag">Highlights</div>
		-->
		<!--Dynamic Game Section
		<div class="row">
			<div class="col-xs-12">
				<div class="game-section">
					<a href="../Category List/category list page.html">
					<div class="col-xs-6 game-container">
						<img src="../Homepage/img/img3.jpg" style="width: 100%;">
						<p class="game-text">Your Daily Horoscope</p>
					</div>
				</a>
				<a href="../Content/numerologia.html">
					<div class="col-xs-6 game-container">
						<img src="../Homepage/img/img3.jpg" style="width: 100%;">
						<p class="game-text">Numerology</p>
					</div>
				</a>
				</div>	
			</div>
		</div>
		-->

		<div class="col-xs-12 searchTest"></div>

		<!--Search Input-->
		<div class="row">
			<div class="col-xs-12">
				<div class="search-container">
					<input class="searchBar" dir="rtl" type="search" name="MyAstroSearch" placeholder="ما الذي تبحث عنه ">
					<button class="lupa">
					<!--
						<img src="../Content/img/mag_glass.png" style="width: 100%;">
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
			<img src="../Content/img/arrow_left.png" style="width: 6vw"><span dir="rtl" style="display: inline-block;">
			الرجوع</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span dir="rtl">عد لأعلى</span>
			<img src="../Content/img/arrow_up.png" style="width: 6vw">
			</button>
		</a>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="../Homepage/smartphone.html">
			<button class="back-home"><span dir="rtl">الرئيسية</span>
			<img src="../Content/img/house.png" style="width: 6vw">
			</button>
		</a>
		</div>
	</div>

	<!--Image Footer-->
	<div class="row">
		<div class="footer">
			<div class="col-xs-6">
				<a dir="rtl" href="../Account Page/accountpage_subscribed.html" class="ftext">الحساب الشخصي</a>
			</div>
			<!--
			<div class="col-xs-4">
				<a dir="rtl" href="../Help and T&C/help.html" class="ftext">مساعدة</a>
			</div>
				
			-->
			<div class="col-xs-6">
				<a dir="rtl" href="../Help and T&C/T&C.html" class="ftext">الشروط و الأحكام</a>
			</div>
			<a href="../Homepage/smartphone.html">
				<img class="astro-footer" src="../Homepage/img/logo_bigger.png">
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
	<script type="text/javascript" src="../Homepage/js/slick.min.js"></script>
	<script type="text/javascript" src="../Homepage/js/main.js"></script>


</body>
</html>