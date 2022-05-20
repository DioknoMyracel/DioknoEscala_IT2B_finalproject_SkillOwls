<?php 
	session_start();
	$logo = 'images/logo.png';
	$banner = 'gifs/banner.gif';
	$home_address ='index.php';
	$news_address ='news.php';
	$highlights_address = 'highlights.php';
	$tutorial_address = 'tutorials.php';
	$news1 ='https://www.eurogamer.net/league-of-legends-developer-suing-mobile-legends-for-copyright';
	$news2 ='https://www.oneesports.gg/mobile-legends/31st-sea-games-mobile-legends/';
	$news3 ='https://www.gosugamers.net/mobile-legends/news/57122-rsg-ph-are-the-new-champions-of-mpl-ph-season-9';
	$news4 ='https://www.gosugamers.net/mobile-legends/news/56930-rrq-hoshi-are-the-first-grand-finalists-for-mpl-id-season-9" class="list';
	$news1_img ='images/news1.jfif';
	$news2_img ='images/news2.jfif';
	$news3_img ='images/news3.jpg';
	$news4_img ='images/news4.jpg';
	$fb_logo = 'images/fb.png';
	$ig_logo = 'images/ig.png';
	$twit_logo = 'images/twitter.png';
	$h1 = 'https://www.youtube.com/embed/22PFPiT7NH0';
	$h2 = 'https://www.youtube.com/embed/hsBulb282H4';
	$h3 = 'https://www.youtube.com/embed/r3y-e6liquE';
	$h4 = 'https://www.youtube.com/embed/5iyNpUWQBeE';
	$miya_address = 'miya.php';
	$balmond_address ='balmond.php';
	$kagura_address = 'kagura.php';
	$karina_address ='karina.php';
	$miya_img = 'images/miya.webp';
	$balmond_img = 'images/balmond.webp';
	$kagura_img = 'images/kagura.webp';
	$karina_img = 'images/karina.webp';
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
	            <a class="active" href="<?php echo $home_address; ?>">HOME</a>
	            <a href="<?php echo $news_address;?>">NEWS</a>
	            <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
	            <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>
	        </div>
	        <div class="searchbox"><span class="material-symbols-outlined" style="font-size: 25px; font-weight: bold">search</span>
	        </div>
	    </div>
	   	<div class="banner">
	        <img src="<?php echo $banner; ?>">
	        <div class="text">
	            <?php 
	            	echo "<h4>Mobile Legends Patch 1.6.66 Update: Hero adjustments Revamped Faramis (Nerfed)</h4>";
	            	echo "<p>Mobile Legends Patch 1.6.66 Update is live on the Advanced Server of the game. This Patch Update has brought in some changes to theform of Faramis, which was introduced in the last Patch 1.6.64 Update. Being very rarely picked in games, Faramis and Vexana were expected...</p>";
	            ?>
	        </div>
	   	</div>
	    <nav class="menu">  		
		    <a class="active" href="<?php echo $home_address;?>">HOME</a>      	
		    <a href="<?php echo $news_address; ?>">NEWS</a>        	
		    <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		    <a href="<?php echo $tutorial_address; ?>">TUTORIALS</a>   
		</nav>
		<div class="homehead">Latest News</div>
		<div class="main">
		    <div class="newslist">
		        <div class="news">
		            <img src="<?php echo $news1_img; ?>">
		        </div>
		        <div class="list">	 
		            <a href="<?php echo $news1; ?>" class="list">
		            <h4>League of Legends developer suing Mobile Legends for copyright</h4></a>
		           	<?php    
			            echo '<h5>Riot Games, the developer behind MOBA League of Legends, is suing ByteDances Shanghai Moont...<p>3 days ago</p></h5>';
			        ?>
		        </div>
		    </div>
		    <div class="newslist">
		        <div class="news"> 
		            <img src="<?php echo $news2_img; ?>">
		        </div>
		        <div class="list">	 
		            <a href="<?php echo $news2; ?>" class="list">
		            <h4>31st SEA Games Mobile Legends: Schedule, results, format, where to watch</h4></a>
		            <?php
		                echo '<h5>The 31st Southeast Asian Games is set to feature multiple espor...</h5>';
		                echo '<p>2 days ago</p>';
		            ?>
		        </div>
		    </div>
		    <div class="newslist">
		        <div class="news">	 
		            <img src="<?php echo $news3_img; ?>" class="news">
		        </div>
		        <div class="list">
		            <a href="<?php echo $news3; ?>" class="list">
		            <h4>RSG PH are the new champions of MPL PH Season 9</h4></a>
		            <?php 
		                echo '<h5>MPL PH Season 9’s grand finals were upon us, as we crowned a new champion of the region wi...</h5>';
		                echo '<p>2 weeks ago</p>';
		            ?>
		        </div>
		    </div>
		    <div class="newslist">
		        <div class="news">
		            <img src="<?php echo $news4_img; ?>" class="news">
		        </div>
		        <div class="list">
		            <a href="<?php echo $news4; ?>">
		            <h4>RRQ Hoshi are the first grand finalists for MPL ID Season 9</h4></a>
		            <?php 
		                echo '<h5>For the penultimate day of the MPL ID Season 9 playoffs, we would see an elimination and the first gran...</h5>';
		                echo '<p>3 weeks ago</p>';
		            ?>
		        </div>
		    </div>
		    <div class="seemore">
		        <a href="<?php echo $news_address; ?>">See More</a>
		    </div>
		</div>
		<div class="homehead">MLBB Play Highlights</div>
		<div class="main">
			<iframe style="max-width: 45%" src="<?php echo $h1; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
        	<iframe style="max-width: 45%" src="<?php echo $h2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
        	<iframe style="max-width: 45%" src="<?php echo $h3; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
        	<iframe style="max-width: 45%" src="<?php echo $h4; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
        <div class="seemore">
			<a href="<?php echo $highlights_address; ?>">See More</a>
		</div>
		</div>
		<div class="homehead">MLBB Hero Tutosials</div>
		<div class="main">
			<table class="herolist">
	            <h5 style="font-weight: bold; text-align: center">Choose your hero...</h5>
	            <thead>
		            <tr class="tabs">
		                <th class="hero">Hero</th>
		                <th class="role">Role</th>
		                <th class="specs">Specialties</th>
		            </tr>
	            </thead>
	            <tbody>
	            <?php
	            	$xml = simplexml_load_file("xmlfile.xml");
	            	$ban = $xml ->hero1;
	            ?>
		            <tr>
		                <td><a href="<?php echo $miya_address; ?>"><img src="<?php echo $miya_img; ?>"><?php echo $ban->name;?></a></td>
		                <td><?php echo $ban->role;?></td>
		                <td><?php echo $ban->specs;?></td>
		            </tr>
		        <?php
	            	$xml = simplexml_load_file("xmlfile.xml");
	            	$ban = $xml ->hero2;
	            ?>
		            <tr>
		                <td><a href="<?php echo $balmond_address; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
		                <td><?php echo $ban->role;?></td>
		                <td><?php echo $ban->specs;?></td>
		            </tr>
		        <?php
	            	$xml = simplexml_load_file("xmlfile.xml");
	            	$ban = $xml ->hero3;
	            ?>
		            <tr>
		                <td><a href="<?php echo $kagura_address; ?>"><img src="<?php echo $kagura_img; ?>"><?php echo $ban->name;?></a></td>
		                <td><?php echo $ban->role;?></td>
		                <td><?php echo $ban->specs;?></td>
		            </tr>
		        <?php
	            	$xml = simplexml_load_file("xmlfile.xml");
	            	$ban = $xml ->hero4;
	            ?>
		            <tr>
		                <td><a href="<?php echo $karina_address; ?>"><img src="<?php echo $karina_img; ?>"><?php echo $ban->name;?></a></td>
		                <td><?php echo $ban->role;?></td>
		                <td><?php echo $ban->specs;?></td>
		            </tr>
	            </tbody>
	        </table>
			<div class="seemore">
			<a href="<?php echo $tutorial_address; ?>">See More</a>
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
</body>