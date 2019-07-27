<?php include("config.php") ?>
<?php include("inc/api.php") ?>

<html>
	<head>
		<title>tLoad &middot; tasid.xyz</title>
		<?php include("inc/style.php") ?>
	</head>
	
	<body>
		<div class="tl">
			<div class="img">
				<?php echo $pp ?>
			</div>
			
			<div class="name">
				<?php echo $uname ?>
			</div>
		</div>
		
		<div class="center">
			<h1><?php echo $servername ?></h1>
			<?php if ($line) {echo "<hr>";} ?>
			<p><?php echo $desc ?></p>
		</div>
	</body>
</html>