<?php 
	session_start();
	$logo = 'images/logo.png';
	$banner = 'gifs/banner.gif';
	$home_address ='index.php';
	$news_address ='news.php';
	$highlights_address = 'highlights.php';
	$tutorial_address = 'tutorial.php';
	$kagura_gif = 'gifs/kagura.gif';
	$kagura1 = 'https://www.youtube.com/embed/-SmzJngFTQM';
	$kagura2 = 'https://www.youtube.com/embed/px2xXmqdB9M';
	$kagura3 = 'https://www.youtube.com/embed/oW3zgOGk1tQ';
	$kagura4 = 'https://www.youtube.com/embed/1QSD4U1U1LM';
	$kagura5 = 'https://www.youtube.com/embed/w1_X6IjfFek';
	$kagura6 = 'https://www.youtube.com/embed/PNpY4_ePUDI';
	$kagura7 = 'https://www.youtube.com/embed/1KABw7kOO2s';
	$kagura8 = 'https://www.youtube.com/embed/-9QwP9R0wKs';
	$fb_logo = 'images/fb.png';
	$ig_logo = 'images/ig.png';
	$twit_logo = 'images/twitter.png';
	$funny_address = 'funny.php';
	$epic_address = 'epic.php';
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
		        <a href="<?php echo $news_address;?>">NEWS</a>
		        <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		        <a class="active" href="<?php echo $tutorial_address; ?>">TUTORIALS</a>
		    </div>
		    <div class="searchbox"><span class="material-symbols-outlined" style="font-size: 25px; font-weight: bold">search</span>
		     </div>
		</div>
		<nav class="menu">  		
		    <a href="<?php echo $home_address;?>">HOME</a>      	
		    <a href="<?php echo $news_address; ?>">NEWS</a>        	
		    <a href="<?php echo $highlights_address; ?>">HIGHLIGHTS</a>
		    <a class="active" href="<?php echo $tutorial_address; ?>">TUTORIALS</a>   
		</nav>
	    <div class="miyahead"><?php echo 'Learn How to Use Mobile Legends: Bang Bang Hero Kagura'; ?></div>
	    <div class="main">
	    <div class="miyagif">
		    <img src="<?php echo $kagura_gif; ?>">
		    <div class="miyaban">
		       	<h4><?php echo 'Kagura'; ?></h4>
		    </div>
		</div>
	    	<iframe style="max-width: 45%" src="<?php echo $kagura1; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura3; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura4; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura5; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura6; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura7; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
	        <iframe style="max-width: 45%" src="<?php echo $kagura8 ; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" "&autoplay=1" allowfullscreen ></iframe>
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