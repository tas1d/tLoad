<style>
	body {
		margin: 0;
		color: #FFF;
		background: #121821 url(<?php echo $bg ?>) no-repeat bottom center fixed;
		background-size: cover;
		font-family: Arial, 'sans-serif';
	}
	
	.tl {
		position: fixed;
		top: 20px;
		left: 20px;
		padding: 10px 12px 6px 12px;
		border-radius: <?php echo $br."px" ?>;
		background-color: <?php echo $uibg ?>;
		border: 1px solid black;
	}
	
	.name,
	.img {
		display: inline-block;
	}
	
	img {
		width: 58px;
		border-radius: 6px;
	}
	
	.name {
		padding-left: 8px;
		font-size: 22px;
		height: 22px;
		margin-top: 18px;
		vertical-align: top;
	}
	
	.center {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		margin: auto;
		width: 600px;
		text-align: center;
		height: 80px;
	}
	
	.center h1 {
		font-size: 42px;
		margin: 0;
		color: <?php echo $scol ?>;
	}
	
	.center p {
		font-size: 25px;
		margin: 0;
		color: <?php echo $dcol ?>;
	}
	
	.center hr {
		border-color: <?php echo $licol ?>;
		width: <?php echo $liwid ?>;
	}
</style>