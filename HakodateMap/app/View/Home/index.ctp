<html class="no-js">
    <head>
	<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
    </head>
<body>

<?php
/*$eatList[$i]
$viewList
$playList
$shopList*/
?>

<ul class="bxslider">
	<?php
			$count = count($viewList);
			if ($count > 3) $count =3;
				for ($i = 0; $i <$count; $i++) {
					//$rand =rand(1, 15);
					echo "<li><img src = \"" . $viewList[$i]['image'] ."\" title=\"" . $viewList[$i]['spotName'] ."\"/></a></li>";
				}
			?>
</ul>

<script type="text/javascript">
$('.bxslider').bxSlider({
  mode: 'fade',
  captions: true
});</script>

</body>
</html>