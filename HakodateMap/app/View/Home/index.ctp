<html class="no-js"><!--<![endif]-->
    <head>
		<!--<link rel="stylesheet" type="text/css" href="css/elastislide.css" />	
		<script src="js/modernizr.custom.17475.js"></script>-->
		<link rel="stylesheet" href="flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="jquery.flexslider.js"></script>
    </head>
<body>

<!--<div class="flexslider">
  <ul class="slides">
  	<?php echo "<li><img src = \"" . $eatList[1]['image'] ."\"titole=\"test\" /></li>";?>
  	<?php echo "<li><img src = \"" . $eatList[2]['image'] ."\"titole=\"test\" /></li>";?>
  	<?php echo "<li><img src = \"" . $eatList[3]['image'] ."\"titole=\"test\" /></li>";?>
  </ul>
</div>-->



<p><font size = "6" color ="#000000">イベント</p>
<BR>


<HR color = "blue" size = "6">
<h1>食べる</h1>
<BR>
		<div id = "fixed-bar">
			<ul id="eat_carousel">
			<?php
			$count = count($eatList);
			if ($count > 30) $count =30;
				for ($i = 0; $i <$count; $i++) {
					//$rand =rand(1, 15);
					echo "<li><a href= \"Map?spotName=" . $eatList[$i]['spotName'] ."\">";
					echo "<img src = \"" . $eatList[$i]['image'] ."\"width=\"200\" height=\"200\" alt=\"image" . $i ."\"/></a></li>";
				}
			?>
			</ul>
		</div>

		
<HR color = "blue" size = "6">
<h1>観る</h1>
<BR>
		<div id = "fixed-bar">
			<ul id="view_carousel">
			<?php
			$count = count($viewList);
			if ($count > 30) $count =30;
				for ($i = 0; $i <$count ; $i++) {
					echo "<li><a href= \"Map?spotName=" . $viewList[$i]['spotName'] ."\">";
					echo "<img src = \"" . $viewList[$i]['image'] ."\"width=\"200\" height=\"200\" alt=\"image" . $i ."\"/></a></li>";
				}
			?>
			</ul>
		</div>
<HR color = "blue" size = "6">
		<h1>遊ぶ</h1>
		<BR>
		<div id = "fixed-bar">
			<ul id="play_carousel">
			<?php
			$count = count($playList);
			if ($count > 30) $count =30;
				for ($i = 0; $i < $count; $i++) {
					echo "<li><a href= \"Map?spotName=" . $playList[$i]['spotName'] ."\">";
					echo "<img src = \"" . $playList[$i]['image'] ."\"width=\"200\" height=\"200\" alt=\"image" . $i ."\"/></a></li>";
				}
			?>
			</ul>
		</div>
<HR color = "blue" size = "6">
		<h1>買う</h1>
		<BR>
		<div id = "fixed-bar">
			<ul id="shop_carousel">
			<?php
			$count = count($shopList);
			if ($count > 30) $count =30;
				for ($i = 0; $i <$count; $i++) {
					//$rand =rand(1, 15);
					echo "<li><a href= \"Map?spotName=" . $shopList[$i]['spotName'] ."\">";
					echo "<img src = \"" . $shopList[$i]['image'] ."\"width=\"200\" height=\"200\" alt=\"image" . $i ."\"/></a></li>";
				}
			?>
			</ul>
		</div>
	<BR>		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			$( '#events_carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
		<script type="text/javascript">
			$( '#eat_carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
				<script type="text/javascript">
			$( '#view_carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
				<script type="text/javascript">
			$( '#play_carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
				<script type="text/javascript">
			$( '#shop_carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
		
</body>
</html>