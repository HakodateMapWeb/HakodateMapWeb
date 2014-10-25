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