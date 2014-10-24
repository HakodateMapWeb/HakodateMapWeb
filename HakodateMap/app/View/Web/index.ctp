
<div id="gnav">
	<ul>
		<li class="gnav01"><a href="/cake/HakodateMapWeb/HakodateMap/Web/"
			class="selected">ホーム（仮）</a></li>
		<li class="gnav02"><a
			href="/cake/HakodateMapWeb/HakodateMap/Web/about">はこだてMap+について（仮）</a></li>
		<li class="gnav03"><a
			href="/cake/HakodateMapWeb/HakodateMap/Web/courselist">コースリスト（仮）</a></li>
		<li class="gnav04"><a href="/cake/HakodateMapWeb/HakodateMap/Map">マップ（仮）</a></li>
	</ul>
</div>
<!-- /gnav -->
<!-- 以上は編集しないで -->

<html>
<head>
	<link rel="stylesheet" href="coverflow.css"/>

<titile>Index Page</titile>


</head>
<body>
<!-- <body> -->
<div id="player"></div>
<script src="coverflow.js"></script>
<script>
	coverflow('player').setup({
		flash: 'coverflow.swf',
		playlist: 'playlist.json',
		width: 460,
		height: 240
	});
</script>

<?php

$str = $spotList['1']['image'];
echo "<img src= ";
echo $str;
echo ">/";

?>



</body>
</html>