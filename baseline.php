<?php
	
	header('Content-Type: text/css');

	if (!isset($_GET['height']) || preg_match('/\d+/', $_GET['height']) === null) {
		exit('You must specify a height.');
	}
	$height = intval($_GET['height']);


	$color = '#000';
	if (isset($_GET['color'])) {
		$color = "#{$_GET['color']}";
	}

?>
	

body:after {

	background-color: transparent;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,transparent), color-stop(<?php echo 100-100/$height ?>%,transparent), color-stop(100%,<?php echo $color ?>)); /* Chrome,Safari4+ */
	background-image: -webkit-linear-gradient(top, transparent 0%, transparent <?php echo $height-1 ?>px, <?php echo $color ?> <?php echo $height ?>px); /* Chrome10+,Safari5.1+ */
	background-image:    -moz-linear-gradient(top, transparent 0%, transparent <?php echo $height-1 ?>px, <?php echo $color ?> <?php echo $height ?>px); /* FF3.6+ */
	background-image:     -ms-linear-gradient(top, transparent 0%, transparent <?php echo $height-1 ?>px, <?php echo $color ?> <?php echo $height ?>px); /* IE10+ */
	background-image:      -o-linear-gradient(top, transparent 0%, transparent <?php echo $height-1 ?>px, <?php echo $color ?> <?php echo $height ?>px); /* Opera 11.10+ */
	background-image:         linear-gradient(top, transparent 0%, transparent <?php echo $height-1 ?>px, <?php echo $color ?> <?php echo $height ?>px); /* W3C */

	background-size: 1px <?php echo $height ?>px;
	background-repeat: repeat;

	content: '';
	display: block;
	height: 100%;
	left: 0;
	pointer-events: none;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 9999;
}
