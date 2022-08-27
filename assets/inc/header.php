<!-- Emely Giraldo, Header for all pages using PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page; ?></title>
	<link href="../assets/img/globe.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $path?>assets/css/style.css" >
</head>

<!-- adding JS file to all pages -->
<script <?php echo "src='".$path."assets/js/fade.js'" ?> > </script>
<body>
	<!-- NAV BAR -->
	<div class="nav" style="min-height: 5vh;">
		<div class="container">
			<div>
				<div class="dropdown">
					<a <?php echo "class='dropbtn " . ($active=="home" ? "active" : "" ) . "'" ?>  <?php echo "href='".$path."'" ?>>Home</a>
				</div>
				<div class="dropdown">
                    <div class="dropbtn">
					    Places To Visit
                    </div>
					<div class="dropdown-content">
						<a <?php echo "href='".$path."ptv/leh.php'" ?>>Leh - Ladak</a>
						<a <?php echo "href='".$path."ptv/delhi.php'" ?>>Delhi</a>
						<a <?php echo "href='".$path."ptv/agra.php'" ?>>Agra</a>
					</div>
				</div>
				<div class="dropdown">
                <div class="dropbtn">
                Food
                    </div>
					<div class="dropdown-content">
						<a <?php echo "href='".$path."food/kebabs.php'" ?>>Kebabs</a>
						<a <?php echo "href='".$path."food/kathi.php'" ?>>Kathi Rolls</a>
						<a <?php echo "href='".$path."food/chicken.php'" ?>>Butter Chicken</a>
					</div>
				</div>
				<div class="dropdown">
                <div class="dropbtn">
                Architechture
                    </div>
					<div class="dropdown-content">
                    <a <?php echo "href='".$path."architechture/tajmahal.php'" ?>>Taj Mahal</a>
					</div>
				</div>
				<div class="dropdown">
					<a <?php echo "class='dropbtn " . ($active=="forum" ? "active" : "" ) . "'" ?> <?php echo "href='".$path."comments.php'"; ?> >Forum</a>
				</div>
			</div>
		</div>
	</div>