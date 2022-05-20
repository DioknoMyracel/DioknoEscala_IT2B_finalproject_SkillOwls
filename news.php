<?php 
	session_start();
	$logo = 'images/logo.png';
	$banner = 'gifs/banner.gif';
	$home_address ='index.php';
	$news_address ='news.php';
	$highlights_address = 'highlights.php';
	$tutorial_address = 'tutorial.php';
	$news1 ='https://www.eurogamer.net/league-of-legends-developer-suing-mobile-legends-for-copyright';
	$news2 ='https://www.oneesports.gg/mobile-legends/31st-sea-games-mobile-legends/';
	$news3 ='https://www.gosugamers.net/mobile-legends/news/57122-rsg-ph-are-the-new-champions-of-mpl-ph-season-9';
	$news4 ='https://www.gosugamers.net/mobile-legends/news/56930-rrq-hoshi-are-the-first-grand-finalists-for-mpl-id-season-9" class="list';
	$news5 ='https://www.gosugamers.net/mobile-legends/news/57106-emotional-scenes-as-omega-eliminate-onic-from-mpl-ph-s9';
	$news6 ='https://mb.com.ph/2022/05/04/mobile-legends-bang-bang-all-star-showdown-2022-sees-top-ph-players-compete-with-gamers-from-other-sea-countries%ef%bf%bc%ef%bf%bc/';
	$news7 ='https://www.gosugamers.net/mobile-legends/news/57066-dashed-dreams-and-delays-on-day-one-of-the-mpl-ph-s9-playoffs';
	$news8 ='https://www.gosugamers.net/mobile-legends/news/57023-msc-2022-s-final-four-spots-and-who-could-acquire-them';
	$news9 ='https://www.gosugamers.net/mobile-legends/news/57085-winning-yesterday-but-losing-today-mpl-ph-s9-playoffs-continue';
	$news10 = 'https://www.gosugamers.net/mobile-legends/news/56939-todak-are-the-champions-of-mpl-my-season-9';
	$news1_img ='images/news1.jfif';
	$news2_img ='images/news2.jfif';
	$news3_img ='images/news3.jpg';
	$news4_img ='images/news4.jpg';
	$news5_img ='images/news5.jpg';
	$news6_img ='images/news6.jpg';
	$news7_img ='images/news7.png';
	$news8_img ='images/news8.jpg';
	$news9_img ='images/news9.jpg';
	$news10_img ='images/news10.jpg';
	$fb_logo = 'images/fb.png';
	$ig_logo = 'images/ig.png';
	$twit_logo = 'images/twitter.png';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>Home Page</title> 
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="body">
		<div class="header">
		    <img src="<?php echo $logo; ?>">
		    <h3>SkillOwls</h3>
		    <div class="navbar">
		        <a href="<?php echo $home_address; ?>">HOME</a>
		        <a class="active" href="<?php echo $news_address;?>">NEWS</a>
		        <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		        <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>
		    </div>
		    <div class="searchbox"><span class="material-symbols-outlined" style="font-size: 25px; font-weight: bold">search</span>
		     </div>
		</div>
		<nav class="menu">  		
		    <a href="<?php echo $home_address;?>">HOME</a>      	
		    <a class="active" href="<?php echo $news_address; ?>">NEWS</a>        	
		    <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		    <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>   
		</nav>
		<div class="homehead"><?php echo 'Latest News'; ?></div>
		<div class="main">
			<div class="latestnews">
		        <div class="news">
		             <img src="<?php echo $news1_img; ?>">
		        </div>
			    <div class="list">	 
			        <a href="<?php echo $news1; ?>">
				    <h4>League of Legends developer suing Mobile Legends for copyright</h4></a>
			        <?php    
				        echo '<h5>Riot Games, the developer behind MOBA League of Legends, is suing ByteDances Shanghai Moonton Technology Co. LTD, the developer behind MOBA Mobile Legends...</h5>';
				        echo '<p>3 days ago</p>';
				    ?>
			    </div>
			</div>
			<div class="latestnews">
		        <div class="news"> 
		            <img src="<?php echo $news2_img; ?>">
		        </div>
		        <div class="list">	 
		            <a href="<?php echo $news2; ?>">
		            <h4>31st SEA Games Mobile Legends: Schedule, results, format, where to watch</h4></a>
			        <?php
		                echo '<h5>The 31st Southeast Asian Games is set to feature multiple esports titles this year, including Mobile Legends: Bang Bang, one of the most popular mobile games in the region...</h5>';
		                echo '<p>2 days ago</p>';
		            ?>
		        </div>
			</div>
			<div class="latestnews">
		        <div class="news">	 
		            <img src="<?php echo $news3_img; ?>" class="news">
		        </div>
		        <div class="list">
		            <a href="<?php echo $news3; ?>">
		            <h4>RSG PH are the new champions of MPL PH Season 9</h4></a>
		            <?php 
		                echo '<h5>MPL PH Season 9’s grand finals were upon us, as we crowned a new champion of the region with a best-of-seven series. After Smart Omega Esports destroyed TNC Pro...</h5>';
		                echo '<p>2 weeks ago</p>';
		            ?>
		        </div>
			</div>
			<div class="latestnews">
		        <div class="news">
		            <img src="<?php echo $news4_img; ?>" class="news">
		        </div>
		        <div class="list">
		            <a href="<?php echo $news4; ?>">
		            <h4>RRQ Hoshi are the first grand finalists for MPL ID Season 9</h4></a>
		            <?php 
		                echo '<h5>For the penultimate day of the MPL ID Season 9 playoffs, we would see an elimination and the first grand finalists for MPL ID Season 9...</h5>';
		                echo '<p>3 weeks ago</p>';
		            ?>
		        </div>
			</div>
			<div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news5_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news5; ?>">
	                <h4>Emotional scenes as Omega eliminate Onic from MPL PH S9</h4></a>
	            <?php 
	                echo '<h5>An elimination series would be the first stop on the penultimate day of MPL PH Season 9 playoffs, as Smart Omega Esports and ONIC PH went to battle...</h5>';
	                echo '<p>2 weeks ago</p>';
	            ?>
	            </div>
	       	</div>
	        <div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news6_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news6; ?>">
	                <h4>All Star Showdown 2022 sees top PH players compete with gamers from other SEA countries￼￼</h4></a>
	            <?php 
	                echo '<h5>Part of the much-awaited 515 M-World event, MLBB players can win bountiful in-game rewards—including a new Zilong skin—by watching the All Star Showdown livestre...</h5>';
	                echo '<p>2 weeks ago</p>';
	            ?>
	            </div>
	        </div>
	        <div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news7_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news7; ?>">
	                <h4>Dashed dreams and delays on day one of the MPL PH S9 playoffs</h4></a>
	            <?php 
	                echo '<h5>In a day filled with technical issues, massive delays, and constant pauses, two teams have seen their MSC 2022 dreams shattered at MPL PH S9 playoffs...</h5>';
	                echo '<p>3 weeks ago</p>';
	            ?>
	            </div>
	        </div>
	        <div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news8_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news8; ?>">
	                <h4>MSC 2022's final four spots and who could acquire them</h4></a>
	            <?php 
	                echo '<h5>MSC 2022 is coming out way in June of this year, with twelve teams from across the SEA regions fighting to be crowned as champions of the entire region...</h5>';
	                echo '<p>3 weeks ago</p>';
	            ?>
	            </div>
	        </div>
	        <div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news9_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news9; ?>">
	                <h4>Winning yesterday but losing today - MPL PH S9 playoffs continue</h4></a>
	            <?php 
	                echo '<h5>Four teams remained in the MPL PH Season 9 Playoffs, and today saw two of these teams fall into the lower bracket...</h5>';
	                echo '<p>3 weeks ago</p>';
	            ?>
	            </div>
	        </div>
	        <div class="latestnews">
	            <div class="news">
	                <img src="<?php echo $news10_img; ?>" class="news">
	            </div>
	            <div class="list">
	                <a href="<?php echo $news10; ?>">
	                <h4>TODAK are the champions of MPL MY Season 9</h4></a>
	            <?php 
	                echo '<h5>One last series remained at the Mobile Legends Professional League Season 9 in Malaysia, as Orange Esports took on TODAK ...</h5>';
	                echo '<p>4 weeks ago</p>';
	            ?>
	            </div>
	        </div>
		    <div class="seemore">
		        <a href="<?php echo $news_address; ?>"></a>
		    </div>
		</div>
		<div class="footer">
			<?php 	
			    echo '<h4>SkillOwls</h4>';
			  	echo '<p>&copy; 2022 . All rights reserved . <br> Exclusive Collaboration of Myracel J. Diokno &&  Angelica Mae A. Escala</p>';
			?>
		   	<a href="#"><img src="<?php echo $fb_logo; ?>"></a>
		    <a href="#"><img src="<?php echo $ig_logo; ?>"></a>
		    <a href="#"><img src="<?php echo $twit_logo; ?>"></a>
		</div>
	</div>
</body>