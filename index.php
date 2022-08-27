<!-- Adit Dhall, Individual Project II -->

<!-- PHP Header -->
<?php
    // Adit Dhall
	$page = 'Home | Adit';
	$path = './';
	$active = "home";
	include $path.'assets/inc/header.php';
?>

	<!-- PAGE HEADER  -->
	<div class="container header">
		<h1 class="visible" id="change">Hello and Welcome to Incredible India!</h1>
		<hr/>
	</div>

	<!-- MAIN CONTENT -->
	<div class="container">
		
		<div>
			<div class="section side">
				<img class="circle" src="assets/img/map.png" alt="map" />
			</div>
			<div class="section main">
				<p> 
                India India has the second-largest population in the world. It is the 7th largest country in the world. India is known for diversity in the region, diversity in language, diversity in food, diversity in festivals, diversity in everything that represents the world, country, and its people. India is a country of the republic that is for the people, by the people, and selected by the people. People run their country, choose their leader, and are independent of everything. India is a country where people change according to their location. Each state has its incredible beauty of heritage as well as the nation. Each state has a history of religion.
				</p>
			</div>
		</div>
		
		<div>
			<div class="section main">
				<h3>Places to Visist</h3>
				<p>
                Choice of vacation destinations in India seem to be infinite; from scenic destinations to historically and culturally soaked sites, from cities bustling with chaos and confusion to destinations offering laid-back and relaxed stays. Amidst this huge list of destinations, there is always a dilemma of choosing a destination that is really worth a visit. On the following pages you can find the top 4 places that you should visit. 
				</p>
			</div>
			<div class="section side">
				<img class="circle" id="slideshow2" src="assets/img/mountain.png" alt="mountain" />
			</div>
		</div>
		
		<div>
			<div class="section side">
				<img class="circle" id="slideshow" src="assets/img/a1.png" alt="Architechture"/>
			</div>
			<div class="section main">
				<h3>The Architechture</h3>
				<p>
                The architecture of India is rooted in its history, culture and religion. Among a number of architectural styles and traditions, the contrasting Hindu temple architecture and Indo-Islamic architecture are the best known historical styles. Both of these, but especially the former, have a number of regional styles within them. Much other early Indian architecture was in wood, which has not survived.
				</p>
			</div>
		</div>
			
		<div class="section main"></div>
	
		<div>
			<div class="section main">
				<h3>Food</h3>
				<p>
                If you ask a Indian what are two things that really stand out for them about the city, it would be the rich history and the mouth-watering food. India is a melting pot of various cultures and races who enrich the variety of the gastronomic range in the city. Delhi is replete with many culinary delights.
				</p>
			</div>
			<div class="section side">
				<img class="circle" id="slideshow1" src="assets/img/food.png" alt="food"/>
			</div>
			
		</div>
		
		
		
	</div>
	<script> 
	// DHTML Element and JS Element
	(function() {
		var switcher = true;
		// set interval on the fade out/in
		setInterval(function() {
			fadeOut(document.getElementById("change"));
			setTimeout(function(){
				changeText(document.getElementById("change"),switcher);
				fadeIn(document.getElementById("change"));
			},1100);
			// switch back and forth on the english vs hindi
			if (switcher) {
				switcher = false;
			}
			else{
				switcher = true;
			}
		},5000);
	}) (); 
</script>

<!-- PHP Footer -->
	<?php
		include $path.'assets/inc/footer.php';
 	?>