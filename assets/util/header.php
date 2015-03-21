<!DOCTYPE html>

    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/images/favicon.png" />
        <title><?= SITE_TITLE?> | <?=$pagetitle?></title>
        <link href="<?=URL_CSS?>stylesheet.css" rel="stylesheet" />
		<script type="text/javascript" src="../assets/scripting/script.js"></script>	
    </head>
	<body onload="loadImages('<?php echo $pagetitle;?>');">
		<div class="bordering">
		<h1>TOURING EUROPE</h1>
		<div class="navlistTOP">
			<ul>
				<li><a href="<?=URL?>index.php">Home</a></li>
				<li><a href="<?=URL?>pages/uk.php">England</a></li>
				<li><a href="<?=URL?>pages/france.php">France</a></li>
				<li><a href="<?=URL?>pages/bnh.php">Belgium & Holland</a></li>
				<li><a href="<?=URL?>pages/gna.php">Germany & Austria</a></li>
				<li><a href="<?=URL?>pages/swiss.php">Switzerland</a></li>
				<li><a href="<?=URL?>pages/italy.php">Italy</a>
					<ul>
						<li><a href="<?=URL?>pages/pisa.php">Pisa</a></li>
						<li><a href="<?=URL?>pages/rome.php">Rome</a></li>
						<li><a href="<?=URL?>pages/venice.php">Venice</a></li>
					</ul>
				</li>
				<li><a href="<?=URL?>pages/about.php">About</a></li>
				<li><a href="<?=URL?>pages/comments.php">Comments</a></li>
			</ul>
		</div>
	</div>
