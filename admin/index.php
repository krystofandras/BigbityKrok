<?php
session_start();
	$mypage = $_GET['page'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrace</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="container">
	<div class="header">
		<h1>Administrace Bigbity rock</h1>
		<p>Ale i tak je Kryštof borec</p>
	</div>
	<div class="main">
		<div class="content">
			<?php
				switch($mypage){
						
					case "index":
						if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
							include("includes/pages/admin.php");
						}
    					else {
							include('includes/pages/login.php');
						}
    				break;
						
					case "kontakt":
    					include("includes/pages/contact.php");
    				break;

					case "two":
    					include("two.php");
    				break;

					default:
    				if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
							include("includes/pages/admin.php");
						}
    					else {
							include('includes/pages/login.php');
						}
				}
			?>
		</div>
	</div>
	<div class="footer">
		
	</div>
</div>
</body>
</html>