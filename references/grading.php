<!-- Adit Dhall, Grading page -->

<!-- PHP Header -->
<?php
    // Adit Dhall
	$page = 'Grading | India';
	$path = '../';
	$active = "grading";
	include $path.'assets/inc/gradingHeader.php';
?>

	<!-- PAGE HEADER  -->
	 
	<div class="container header">
		<h1>Grading Page - What have I done?</h1>
		<hr/>
	</div>

	<!-- MAIN CONTENT -->
	<div class="container push">
			<h3> Individual Project II </h3>
		<ul>

			<li> Original JavaScript Element + DHTML Element: 
				<ul>
					<li> Fade in and Fade out text on the Homepage to translate English to Spanish. </li>
					<li> "Hello and Welcome to Peru, my beautiful homeland!" translates to "नमस्ते और अतुल्य भारत में आपका स्वागत है" </li>
				</ul>
			<li> All Headers and Footers are PHP includes </li>
			<li> Added Forum page for comments, connected to mySQLi database <li>
			<li> Included a map on the Homepage </li>
			<li> Removed picture links on all pages to minimize site navigation confusion </li>
			<li> Fixed broken links & validation errors on placestovisit.html and Food.html </li>
			<li> Created dropdown items in the global navigation for easy site scalability </li>
			<li> Added a footer on all pages for navigation through the site. </li>
            <li> Slight mobile view media queries </li>
            <li>added slideshow on the home page</li>
		</ul>

	</div>

<!-- PHP Footer -->
<?php
include $path.'assets/inc/footer.php';
?>