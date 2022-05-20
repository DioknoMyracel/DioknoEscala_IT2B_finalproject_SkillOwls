<?php 
	session_start();
	$logo = 'images/logo.png';
	$banner = 'gifs/banner.gif';
	$home_address ='index.php';
	$news_address ='news.php';
	$highlights_address = 'highlights.php';
	$tutorial_address = 'tutorial.php';
	$hero1 = 'miya.php';
	$hero2 = 'balmond.php';
	$hero3 = 'kagura.php';
	$hero4 = 'karina.php';
	$hero5 = 'tigreal.php';
	$hero6 = 'harley.php';
	$hero7 = 'kadita.php';
	$hero8 = 'wanwan.php';
	$hero9 = 'faramis.php';
	$hero10 = 'fanny,php';
	$miya_img = 'images/miya.webp';
	$balmond_img = 'images/balmond.webp';
	$kagura_img = 'images/kagura.webp';
	$karina_img = 'images/karina.webp';
	$tigreal_img = 'images/tigreal.webp';
	$harley_img = 'images/harley.webp';
	$kadita_img = 'images/kadita.webp';
	$wanwan_img = 'images/wanwan.webp';
	$faramis_img = 'images/faramis.webp';
	$fanny_img = 'images/fanny.webp';
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
	    <div class="miyahead"><a href="<?php echo $highlights_address; ?>" style="color: white"><?php echo 'Hero List'; ?></a></div>
	    <div class="main">
	    <table class="herolist">
            <h4 style="font-weight: bold; text-align: center">Choose your hero...</h4>
            <thread>
	            <tr class="tabs">
	                <th class="hero">Hero</th>
	                <th class="role">Role</th>
	                <th class="specs">Specialties</th>
	            </tr>
	        </thread>
            <tbody>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero1;
		        ?>
		        <tr>
			        <td><a href="<?php echo $hero1; ?>"><img src="<?php echo $miya_img; ?>"><?php echo $ban->name;?></a></td>
			        <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td> 
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero2;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero2; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name; ?></a></td>
	                <td><?php echo $ban->role; ?></td>
			        <td><?php echo $ban->specs; ?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero3;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero3; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero4;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero4; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero5;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero5; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero6;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero6; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero7;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero7; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero8;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero8; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero9;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero9; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            </tr>
	            <?php
		            $xml = simplexml_load_file("xmlfile.xml");
		            $ban = $xml ->hero10;
		        ?>
	            <tr>
	                <td><a href="<?php echo $hero10; ?>"><img src="<?php echo $balmond_img; ?>"><?php echo $ban->name;?></a></td>
	                <td><?php echo $ban->role;?></td>
			        <td><?php echo $ban->specs;?></td>
	            
	            </tr>
            </tbody>
        </table>
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