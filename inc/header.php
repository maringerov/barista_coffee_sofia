<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $pageTitle; ?></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- NAVBAR -->
	<!-- 	<div class="navbar-wrapper">
			<div class="container"> -->

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><img src="assets/svg/barista_coffee_sofia.svg" alt="logo of Barista Coffee and more." id="logo-nav"></a>
				</div>
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav navbar-right">
					<li <?php if ($section == "home") { echo 'class="active"'; } ?>><a href="index.php">начало</a></li>
					<li <?php if ($section == "about") { echo 'class="active"'; } ?>><a href="about.php">за нас</a></li>
					<li <?php if ($section == "specialties") { echo 'class="active"'; } ?>><a href="specialties.php">специалитети</a></li>
					<li <?php if ($section == "locations") { echo 'class="active"'; } ?>><a href="locations.php">локации</a></li>
					<li><a href="mailto:info@example.com">контакт</a></li>
				  </ul>
				</div>
			  </div>
			</div>

			<!-- </div>
		</div> -->

	<!-- <div class="container"> -->