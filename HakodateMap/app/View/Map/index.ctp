<?php $this->Html->scriptStart(array('inline' => false)); ?>
function getWidthSize(){
alert(screen.Width);
}
function getHeightSize(){
alert(screen.Height);
}
<?php $this->Html->scriptEnd(); ?>
<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>
<?php


$map_options = array (
		// 'id' => '',
		'width' => "javascript:getWidthSize();",
		'height' => '100%',
		// 'style' => '',
		'zoom' => 15,
		'type' => 'ROADMAP',
		'localize' => false,
		'custom' => 'zoomControlOptions: {
        			 style: google.maps.ZoomControlStyle.LARGE,
    			     position: google.maps.ControlPosition.LEFT_CENTER
    				},
					panControl: false,
			    	mapTypeControlOptions: {
      			    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
       				position: google.maps.ControlPosition.TOP_CENTER
   					}
		
		',
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
	<?php echo $this->GoogleMap->map($map_options); ?>
	<div style="position:absolute; left:0px; bottom:0px; width: 100%; height:70px; background-color:#4169e1;">
	<font size="5" color="#ffffff">TEST</font>
	</div>
	
	<div style="position:absolute; left:20px; top:20px;">
		<input type="text" name="example1">
		<select>
          <option>----TEST----</option>
          <option>test1</option>
          <option>test2</option>
        </select>
        <input type="submit" value="検　索">
	</div>
	
	<div style="position:absolute; right:20px; bottom:85px; width: 200px; height:80%; background-color:#5bc3e5;">
	<font size="5" color="#ffffff">TEST------</font>
	</div>
    
</body>
</html>