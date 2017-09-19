
<?php include 'games.php' ?>
<?php 
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', substr($_SERVER['REQUEST_URI_PATH'], 1));
	$url2=$segments[0];
	$url3=$segments[1];
	$url1= $actual_link;
	if(isset($_GET['game'])&&  !empty($_GET['game'])){
		$categories=$_GET['game'];
		//get all the games of the selected category 
		$game=new Games();
		$categories_game=$game->getCategoriesGames($categories);
	}
	else{
		header("Location:".$url1."/".$url2."/".$url3."/smartphone/Content/All Content/play_content.html");
		exit();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Content <?php if(isset($categories)) echo $categories; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/slick.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/content_racing.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/predictions.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/css/mobiplay-slider.css">
	<link rel="stylesheet" type="text/css" href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/Racing/css/content_racing.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
<body>

<div class="container">
	<!--NAVBAR-->
	<div class="row">
		<div class="tag-logo">	
			<div class="col-xs-12 nav-logo">
				<a href="http://zmobs.com/ptesting/MobiPlay/smartphone/Content/All Content/play_content.html"><img style="width: 110px; margin-top: 11px;" src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/mobiplay_logo_navbar.png"></a>
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
		
	<div class="row">

		<!--Racing section-->
		<div class="row">
			<div class="col-xs-12" style="position: relative;">
				<div class="col-xs-12 tag">
					<p><?php if(isset($categories)) echo ucfirst($categories); ?></p>
					<!--
					<button class="more">More<img style="padding-left: 1px; transform: rotate(-90deg); width: 15px" src="../Content/img/arrow_left.png">
					-->
					</button>
				</div>
			</div>
		</div>

		<!--Dynamic Game Section-->
		<div class="row">
			<div class="col-xs-12">
				<div class="game-section">
			<!--	<?php 
					if(isset($categories_game) && !empty($categories_game)):
					    $i=0;
						for($i=0;$i<4;$i++):
							if(!empty($categories_game[$i]['images'])&& !empty($categories_game[$i]['content'])):
						?>
						<a href="http://zmobs.com/allgames/<?php echo $categories_game[$i]['link'];?>">
					<div class="col-xs-6 game-container">
						<img src="../../<?php echo $categories_game[$i]['images'] ?>" style="width: 100%;">
						<p class="game-text"><?php echo $categories_game[$i]['content']; ?></p>
					</div>
				</a>
						
				
				
				<?php
				endif;
				endfor;
				endif;
				?> -->
				<ul style="list-style: none; padding:0; color:white;" class='paging'>
			     <?php 
					if(isset($categories_game) && !empty($categories_game)):
					    foreach($categories_game as $value):
							if(!empty($value['images'])&& !empty($value['content'])):
						?>
						
					<li><div class="col-xs-6 game-container">
					<a href="playgames.php?src=http://zmobs.com/allgames/<?php echo $value['link'];?>&categories=<?php if(isset($categories)) echo $categories; ?>">	
					<img src="../../<?php echo $value['images'] ?>" style="width: 100%;height:300px">
						<p class="game-text"><?php echo substr($value['content'], 0,16);?></p>
					</a>
					</div>
					</li>
				<?php
				endif;
				endforeach;
				endif;
				?>
				</ul>
				</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12" style="margin-top: -20px;">
				<div class="racing-tag"><button class='btnprevnext' id="prev"><< </button>  More Games  <button class='btnprevnext' id="next">>></button></div>
					<div class="racing-background">
						<div class="col-xs-12 ">
							<p style="color:transparent;">Arcade</p>
							<!--
							<a href="../Content/content_expanded.html"><p class="bblue" style="border-right: 1px solid #b1d9dd;">Astrology</p></a>
							-->
							<!--
							<p style="border-right: 1px solid #b1d9dd;">Footbal</p>
							-->
						</div>
						
					</div>
			</div>
		</div>

		 <div class="col-xs-12 searchTest"></div>
		<!--Search Input-->
		<div class="row">
			<div class="col-xs-12">
				<div class="search-container">
					<input type="search" name="MyAstroSearch" class="searchBar" placeholder="What are you looking for?">
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
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_left.png" style="width: 15px"><span style="display: inline-block;">
			Back</span></button>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="#">
			<button class="top"><span>Top</span>
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_up.png" style="width: 15px">
			</button>
		</a>
		</div>
		<div class="col-xs-4" style="padding-left: 10px; padding-right: 10px;">
		<a href="../All Content/play_content.html">
			<button class="back-home"><span>Home</span>
			<img src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/house.png" style="width: 15px">
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
</body>
</html>