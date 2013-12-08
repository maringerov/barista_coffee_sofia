<?php 
$pageTitle = "За нас | Barista Coffee and more";
$section = "about";
include('inc/header.php'); 
?>

<div class="row">
	<div class="featured-photo">
		<img src="assets/images/lightbulbs.png" alt="Founders' picture" style="max-width: none; max-height:100%;">
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-8">
		<h2>за нас</h2>
		<p class="copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget diam tempus, ultrices diam id, euismod ipsum. Aenean convallis mattis lectus, at dictum nulla ornare vitae. Pellentesque eget sollicitudin elit. Nullam ullamcorper sapien eget sodales sollicitudin. Etiam tempus sapien metus. Vestibulum nec molestie mi. Morbi magna arcu, varius eget quam congue, fermentum accumsan metus. Pellentesque malesuada, est id tincidunt blandit, leo turpis ultrices odio, sed aliquam libero dolor nec diam.</p>

		<p class="copy">Aenean eget dui in purus vestibulum vestibulum. Etiam iaculis dui ac eros hendrerit, pulvinar lacinia ipsum tempor. Nulla quis tortor lacinia mi ornare semper et nec arcu. Aenean sed iaculis enim. Aenean a risus tortor. Mauris turpis eros, laoreet eu nisl nec, pulvinar aliquet risus. Mauris nulla sapien, laoreet vitae lobortis porttitor, tincidunt a ante. Ut nisi elit, semper at dictum sed, porta eget nunc.</p>

	</div>
	<div class="col-md-4">
		<h2>посети ни!</h2>
		<div id="locations"></div><br>
		<address>
			ул. Бачо Киро 26<br>София 1000
		</address>
		<p>работно време:<br>
		всеки ден, 07:00 - 20:00<br><br>
		Т: (+359) 887 765 788<br>
		E: hi@baristacoffeesofia.com</p><a href="#"><img src="assets/svg/facebook3.svg" alt="facebook icon" id="fb"></a>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$("#locations").prepend('<iframe id="map" src="map.html" seamless="seamless" scrolling="no" style="width:100%; height:300px;"></iframe>');
</script>

<?php include('inc/footer.php'); ?>