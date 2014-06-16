<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>
<?php

$map_options = array (
		// 'id' => '',
		// 'width' => '800px',
		// 'height' => '800px',
		// 'style' => '',
		'zoom' => 15,
		'type' => 'ROADMAP',
		'localize' => false,
		'custom' => null,
		'latitude' => 41.841835,
		'longitude' => 140.766998,
		// 'address' => '',
		'marker' => true,
		'markerTitle' => 'Future University Hakodate',
		'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
		'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
		'infoWindow' => true,
		'windowText' => 'Future University Hakodate\nつまりﾈﾑｲ(´･ωゞ)' 
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>sampleMap</title>
</head>
<body>
	<h1>これは地図なのか…</h1>
	<p>え…</p>
	<?php echo $this->GoogleMap->map($map_options); ?>
	<?php echo date('Y/m/d', time());?>
</body>
</html>