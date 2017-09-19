<?php

	//check if gamename,morelink, src link
    if(isset($_GET['src']) && isset($_GET['categories']) && !empty($_GET['src']) && !empty($_GET['categories']) ) {
			$src=$_GET['src'];
			$categories=$_GET['categories'];
	}
	else{
		//send to home page
		header('Location: http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All Content/play_content.html');
		exit();
	}

?>                                                                  




<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Content List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/slick.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/slick-theme.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/predictions.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/mobiplay-slider.css">
    
<body>

<div class="container">
	<!--NAVBAR-->
	<div class="row">
		<div class="tag-logo">	
			<div class="col-xs-12 nav-logo">
				<a href="../All Content/play_content.html"><img style="width: 110px; margin-top: 11px;" src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/mobiplay_logo_navbar.png"></a>
				<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Profile Page/accountpage_subscribed.html"><img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/avatar.png" class="nav-avatar"></a>
			</div>
		</div>
	</div>

	<!--
	<div class="col-xs-12 nav-logo">
		<img style="width: 80px;" src="../Content/img/logo_bigger.png">
	</div>
	-->

	<!--MYASTRO SLIDER-->
	<div class="row">
		<div id="mobiSlider">
			<div>
				<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/secret lover_banner.jpg" class="s-lover" alt="img">
			</div>
			<div>
				<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/secret lover_banner.jpg" class="s-lover" alt="img">
			</div>
			<div>
				<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/secret lover_banner.jpg" class="s-lover" alt="img">
			</div>
		</div>
	</div><!--END SLIDER ROW-->
	<!--Dynamic Game Section-->
		<div class="row">
			<div class="col-xs-12">
				<div class="game-section">
				<iframe id="iframedata" src="<?php if(isset($src)) echo $src;?>" style="width:100%;height:100vh" frameborder="0" allowfullscreen></iframe>
				</div>	
			</div>
		</div>
		
	
		
	<div class="row">
		<!--Arcade section-->
		<div class="row">
			<div class="col-xs-12" style="position: relative;">
				<div class="col-xs-12 tag">
					<p><?php if(isset($categories))echo ucfirst($categories);?></p>
				<a href="../Gameslist/gameslist.php?game=<?php if(isset($categories)) echo $categories; ?>">
					<button class="more">More<img style="padding-left: 1px; transform: rotate(-90deg); width: 15px" src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_left.png">
					</button>
				</a>
				</div>
			</div>
		</div>

	<!--Bottom Buttons-->
	<div class="row" style="background: white; padding:5px 0;">
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
			<button onclick="goBack()" class="back-home">
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_left.png" style="width: 6vw"><span style="display: inline-block;">
			Back</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span>Top</span>
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_up.png" style="width: 6vw">
			</button>
		</a>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="../All Content/play_content.html">
			<button class="back-home"><span>Home</span>
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/house.png" style="width: 6vw">
			</button>
		</a>
		</div>
	</div>

	<!--Image Footer-->
	<div class="row">
		<div class="footer">
		<div class="col-xs-4"><a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Profile Page/accountpage_subscribed.html" class="ftext">Profile</a></div>
		<div class="col-xs-4"><a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Terms and Help/terms.html" class="ftext">T&C</a></div>
		<div class="col-xs-4"><a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Terms and Help/help.html" class="ftext">Help</a></div>
			<a href="../All Content/play_content.html"><img class="astro-footer" src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/mobiplay_logo_footer.png"></a>
		</div>
	</div>

</div><!--END CONTAINER-->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://zmobs.com/ptesting/MobiPlay/smartphone/js/slick.min.js"></script>
	<script type="text/javascript" src="http://zmobs.com/ptesting/MobiPlay/smartphone/js/main.js"></script>
	<script type="text/javascript" src="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All Content/js/main.js"></script>
	<script>
	
    var iframeresult=0;
    $('iframe').on('load', (function () {
        var iframeresult=1;
        
    }));
    if(iframeresult==0){
		$('#iframedata').empty();
		$('#iframedata').append('error');
	}

	
	</script>
</body>
</html>