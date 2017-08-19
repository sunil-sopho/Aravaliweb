<?php
//

?>
<?php  
?>
<!DOCTYPE html>
<html>
    <head>
	<title>
	  <?php echo htmlspecialchars($title) ?>
	  </title>
	  <link rel="icon" type="image/gif/png" href="images/logo1.png">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/main.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style = "margin-left:100px"><img src="images/logo1.png" width ="65px" height = "100%"></a>
	  <a href="aravali.php" class="brand-logo" style = "margin-left:200px">ARAVALI HOUSE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        	<li><a href="notices.php">NOTICES</a></li>
		<li class ="<?php if($page == "brca")echo active;else echo inactive;?>"><a href="clubs.php">BRCA CLUBS</a></li>
       		<!--<li><a href="mess.php">MESS</a></li>
		<li><a href="maint.php">MAINTAINENCE</a></li>
		<li><a href="cult.php">CULTURE</a></li>-->
		<li><a href="house.php">HOUSE COMMITTEE</a><li>
		<li class ="<?php if($page == "sports")echo active;else echo inactive;?>"><a href="sports1.php">SPORTS</a></li>
		<li><a href="library.php">WEB TEAM</a></li>
      </ul>
    </div>
		 
  </nav>
  
  
