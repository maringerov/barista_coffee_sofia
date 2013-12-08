<?php
$pageTitle = "Локации | Barista Coffee and more";
$section = "locations";
include('inc/header.php');
?>

<div class="row">
	<div class="featured-photo">
		<img src="assets/images/lightbulbs.png" alt="Founders' picture" style="max-width: none; max-height:100%;">
	</div>
</div>

<div class="container">
	
	<div class="row">
		<div class="col-md-12">
			<h2 class="title">Заповядайте при нас да се насладим на чаша ароматно еспресо!</h2>
			<p class="subtitle">УЛ. БАЧО КИРО 26, СОФИЯ | T: 0887 765 788 | ПОН-НЕД 07:00 - 20:00</p>
		</div>
		<div id="locations" class="col-md-12"><br>
			
			<div class="col-md-12">
				<address>
					ул. Бачо Киро 26<br>София 1000
				</address>
				<p>работно време:<br>всеки ден, 07:00 - 20:00<br><br>Т: (+359) 887 765 788<br>E: hi@baristacoffeesofia.com</p>
				<a href="#"><img src="assets/svg/facebook3.svg" alt="facebook icon" id="fb"></a>
			</div>

		</div>
	</div>
	
	

</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$("#locations").prepend('<iframe id="map" src="map.html" seamless="seamless" scrolling="no" style="width:100%; height:400px;"></iframe>');
</script>


<?php
include('inc/footer.php')
?>