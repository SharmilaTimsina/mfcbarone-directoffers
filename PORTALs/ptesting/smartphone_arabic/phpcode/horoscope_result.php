<?php include_once 'Classes/horoscope.php'; ?>
<?php 
	//for address
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', substr($_SERVER['REQUEST_URI_PATH'], 1));
	$url2=$segments[0];
	$url3=$segments[1];
	$url1= $actual_link;
	if(isset($_GET['src']) && isset($_GET['sign']) && isset($_GET['id'])) {
		$src=$_GET['src'];
		$sign=$_GET['sign'];
		$horoscope=new Horoscope();
		$result=$horoscope->getData($_GET['id']);

	}
	else{
		header("Location:".$url1."/".$url2."/".$url3."/Category List/category list page.html");
		exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result - Horoscope</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="../Content/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../Content/css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../Content/css/content_info.css">
</head>
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
		
	<!--NUMEROLOGIA-->
	<div class="row">

	<div class="horoscope-result">
		<div class="info-container" style="padding-top:15px;">
			<div class="info-subtitle">Horoscope for </br><?php echo Date('d/m/Y');?></div>
			<div class="col-xs-12">
				<img src="<?php if(!empty($src))echo "../Category List/img/".$src ;?>" style="width: 120px; display: block; margin:0 auto;" alt='<?php if(!empty($sign)) echo $sign;?>'>
				<p class="name-background"><?php if(!empty($sign)) echo $sign;?></p>
			</div>
			<div class="col-xs-12">
				<div class="horoscope-result-text"><?php if(isset($result)){echo $result;}?>
				</div>
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
		
		<!--Search Input-->
		<div class="row">
			<div class="col-xs-12">
				<div class="search-container">
					<input type="search" name="MyAstroSearch" placeholder="What are you looking for?">
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
			<img src="../Content/img/arrow_left.png" style="width: 15px"><span style="display: inline-block;">
			Back</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span>Top</span>
			<img src="../Content/img/arrow_up.png" style="width: 15px">
			</button>
		</a>	
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="../Homepage/smartphone.html">
			<button class="back-home"><span>Home</span>
			<img src="../Content/img/house.png" style="width: 15px">
			</button>
		</a>
		</div>
	</div>

	<!--Image Footer-->
	<div class="row">
		<div class="footer">
		<div class="col-xs-4"><a href="../Account Page/accountpage_subscribed.html" class="ftext">Profile</a></div>
		<div class="col-xs-4"><a href="../Help and T&C/T&C.html" class="ftext">T&C</a></div>
		<div class="col-xs-4"><a href="../Help and T&C/help.html" class="ftext">Help</a></div>
			<a href="../Homepage/smartphone.html"><img class="astro-footer" src="../Content/img/logo_bigger.png"></a>
		</div>
	</div>

</div><!--END CONTAINER-->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="../Content/js/slick.min.js"></script>

	<script>
		/**for the back button**/
		function goBack() {
		    window.history.back();
		}
	</script>


</body>
</html>