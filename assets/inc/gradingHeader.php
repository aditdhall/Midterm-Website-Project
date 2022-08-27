<!-- Adit Dhall, grading and references header in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page; ?></title>
	<link href="../assets/img/globe.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" >
</head>
<body>
	<!-- NAV BAR -->
	<div class="nav" style="min-height: 4.5vh;">
		<div class="container">
			<div>
				<a class="dropbtn" <?php echo "href='".$path. "'"?>>India</a>
				<a <?php if ($active == "references"){echo "class='dropbtn active'";}else{echo "class='dropbtn'";}?> href="../references/index.php" >References</a>
				<a <?php if ($active == "grading"){echo "class='dropbtn active'";}else{echo "class='dropbtn'";}?> href="../references/grading.php"> Grading</a>
			</div>
		</div>
	</div>