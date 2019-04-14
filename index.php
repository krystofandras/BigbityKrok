<?php $mypage = $_GET['page']; ?>
<!doctype html>
<html lang="cs">
<head>
<!--META-->
<meta charset="utf-8">
<title>Bigbity Rock | Zábavová kapela</title>
<meta name="viewport" content="width=device-width, initial-scale=0.5" />
<meta name="Description" content="Kostelecká zábavová kapela hrající své i převzaté bigbítové pecky."/>
<meta name="robots" content="index, nofollow" />
<meta name="theme-color" content="#e4097e">
<!--LINKS-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="icon" type="image/png" href="img/favicon.png" />
<!--SCRIPTS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/menu.js"></script>
<script type="text/javascript" src="scripts/instafeed.js"></script>
<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
</head>

<body>
<div class="container">
	<?php include('includes/header.php') ?>
	<div class="main">
		<div class="content">
			<?php
				switch($mypage){
						
					case "index":
    					include("includes/pages/main.php");
    				break;
						
					case "kontakt":
    					include("includes/pages/contact.php");
    				break;

					case "koncerty":
    					include("includes/pages/events.php");
    				break;
						
					case "band":
    					include("includes/pages/band.php");
    				break;
					
					case "fotogalerie":
    					include("includes/pages/photos.php");
    				break;

					default:
    				include("includes/pages/main.php");
				}
			?>
		</div>
		<div class="aside">
			<?php include('includes/sidebar.php'); ?>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>
</div>
</body>
</html>