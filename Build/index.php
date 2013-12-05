<?php 
$pageTitle = "Barista Coffee and more";
$section = "home";
include('inc/header.php');

?>

	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/images/coffee.jpg" alt="First slide" style="max-width:none; max-height:100%;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/shot.jpg" alt="Second slide" style="max-width:none; max-height:100%;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/barista-cup.jpg" alt="Third slide" style="max-width:none; max-height:100%;">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

	<!-- Three rows main content -->
	<div class="row main">
		<div class="col-md-12" id="greeting">Добре дошли в Barista Coffee and more</div>
		<div class="col-md-12" id="greeting-small">Добре дошли!</div>
	</div>
	<div class="row" id="three-cols">
		<div class="col-md-4">
			<h2>за нас</h2>
			<img src="assets/images/niki-stenli.png" alt="Founders' picture" class="specials">
			<p class="about_us">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan justo id ornare tristique. Morbi eros tortor. Patruci cientremi ateroti</p>
		</div>
		<div class="col-md-4">
			<h2>специалитети</h2>
			<img src="assets/images/foam.png" alt="Specialty of the month." class="specials">
			<p class="about_us">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan justo id ornare tristique. Morbi eros tortor. Patruci cientremi ateroti</p>
		</div>
		<div class="col-md-4">
			<h2>посети ни!</h2>
			<img src="http://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=300x300&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Ccolor:red%7Clabel:C%7C40.718217,-73.998284&sensor=false" alt="A map with directions how to find our cafe in Sofia." class="map">
			<p class="about_us">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan justo id ornare tristique. Morbi eros tortor. Patruci cientremi ateroti</p>
		</div>
	</div>
	<div class="row final">
		<div class="col-md-8">
			<blockquote cite="Марин Геров">
				<p class="quote">Най-доброто капучино в София, поднесено в уютна обстановка и с усмивка от любезния персонал!</p><br>
				<small>Марин Геров</small>
			</blockquote>
		</div>
		<div class="col-md-4">
			<h2 class="contact_us">свържете се с нас!</h2>
			<p>работно време:<br>
			всеки ден, 07:00 - 20:00<br><br>
			Т: (+359) 887 765 788<br>
			E: hi@baristacoffeesofia.com</p><a href="#"><img src="assets/svg/facebook3.svg" alt="facebook icon" id="fb"></a>
		</div>
	</div>

<?php include('inc/footer.php'); ?>