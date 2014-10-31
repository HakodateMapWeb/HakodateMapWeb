<?php
foreach ( $courseList as $course ) {
	echo $course ['courseName'];
	echo ": " . $course ['image'];
	echo "<br/>";
	$count = 1;
	$str = $course ['image'];
	$str2 = $course ['courseName'];
	echo "<div id=\"box\">
	<ul>
	<li class=\"box0$count\"><img src=\"$str\" alt=\"$str2\"></li>
	</ul>
	</div>";
	$count++;
}
?>
<!--<?php

for($i = 0; $i < 10; $i ++) {
	echo "<div id=\"gnav\">
	<ul>
	<li class=\"gnav01\"><a href=\"/cake/HakodateMapWeb/HakodateMap/Web/\">ホーム（仮）</a></li>
	<li class=\"gnav02\"><a
	href=\"/cake/HakodateMapWeb/HakodateMap/Web/about\">はこだてMap+について（仮）</a></li>
	<li class=\"gnav03\"><a
	href=\"/cake/HakodateMapWeb/HakodateMap/Web/courselist\"
			class=\"selected\">コースリスト（仮）</a></li>
			<li class=\"gnav04\"><a href=\"/cake/HakodateMapWeb/HakodateMap/Map\">マップ（仮）</a></li>
			</ul>
			</div>";
}
?>-->

<html>
<head>
<titile>Index Page</titile>
</head>
<body>
</body>
</html>