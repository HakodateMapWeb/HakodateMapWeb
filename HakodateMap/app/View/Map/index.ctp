
<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>
<?php

if(isset($spotList[0])){
	$lat = $spotList['0']['lat'];
	$long = $spotList['0']['long'];
}else{
	$lat = 41.773922;
	$long = 140.726426;
}

		
$map_options = array (
		'id' => 'hakodate',
		'width' => '100%',
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
					mapTypeControl: false,
			    	mapTypeControlOptions: {
      			    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
       				position: google.maps.ControlPosition.TOP_CENTER
   					}
		
		',
		'latitude' => $lat,
		'longitude' => $long,
		// 'address' => '',
		'marker' => false,
		//'markerTitle' => 'Future University Hakodate',
		//'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
		//'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
		//'infoWindow' => true,
		//'windowText' => 'Future University Hakodate\n������������������(����������)' 
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>sampleMap</title> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
	#sortable li { margin: 3px 3px 0 5px; padding: 0px; float: left; width: 100px; height: 60px; font-size: 3em; text-align: center; }
</style>

 <script>
	$(function() {
	$( "#sortable" ).sortable({ axis: 'x', containment : 'parent',  cursor : 'move', cursorAt : { left : 50, top: 30}  });
	$( "#sortable" ).disableSelection();
	});
</script>

</head>
<body>
	<?php echo $this->GoogleMap->map($map_options); ?>
	<?php $i = 0;
	foreach($spotList as $spot){
		$marker_options = array(
    	'showWindow' => true,
		'windowText' => $spot['spotName'],
    	'markerTitle' => $spot['spotName'],
   		'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
  		);
		echo $this->GoogleMap->addMarker('hakodate', $i, array('latitude' => $spot['lat'], 'longitude' => $spot['long']), $marker_options);
		$i++;
	} ?>
	
	<div class="cake.web effect2" style="position:absolute; bottom:0px; width: 100%; height:70px; background-color:rgba(30, 144, 255, 0.6);">

		<ul id="sortable" class="ui-sortable">
			<li class="ui-state-default ui-sortable-handle">1</li>
			<li class="ui-state-default ui-sortable-handle">2</li>
			<li class="ui-state-default ui-sortable-handle">3</li>
			<li class="ui-state-default ui-sortable-handle">4</li>
			<li class="ui-state-default ui-sortable-handle">5</li>
			<li class="ui-state-default ui-sortable-handle">6</li>
			<li class="ui-state-default ui-sortable-handle">7</li>
			<li class="ui-state-default ui-sortable-handle">8</li>
		</ul>

	</div>

	<div class="cake.web effect1" style="position:absolute; right:20px; bottom:95px; width: 200px; height:80%; background-color:rgba(255, 255, 255, 1);">

	  	<div class="TAB">
		    <input name="s3" id="select1" value="1" checked="" type="radio">
		    <label for="select1">TEST1</label>
		    <input name="s3" id="select2" value="2" type="radio">
		    <label for="select2">TEST2</label>
		</div>

	</div>

</body>
</html>