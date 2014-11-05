
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
		'height' => '90%',
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
		//'windowText' => 'Future University Hakodate\n'
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


 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
 <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>


<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
	#sortable li { margin: 3px 3px 0 5px; padding: 0px; float: left; width: 10%; height: 75%; font-size: 120%; text-align: center; }
</style>

 <script>
	$(function() {
	$( "#sortable" ).sortable({ axis: 'x', containment : 'parent',  cursor : 'move', cursorAt : { left : 50, top: 30}  });
	$( "#sortable" ).disableSelection();
	});
</script>


<script type="text/javascript"><!--
function ChangeTab(tabname) {
   // 全部消す
   document.getElementById('tab1').style.display = 'none';
   document.getElementById('tab2').style.display = 'none';
   // 指定箇所のみ表示
   document.getElementById(tabname).style.display = 'block';
}
// --></script>

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
	


	<div class="cake.web effect1" style="position:absolute; right:20px; bottom:20%; width: 200px; height:75%; background-color:rgba(255, 255, 255, 1);">
			<div class="tabbox">
			    <a href="#tab1" class="tab1" onclick="ChangeTab('tab1'); return false;">タブ1</a>
			    <a href="#tab2" class="tab2" onclick="ChangeTab('tab2'); return false;">タブ2</a>
			   <div id="tab1">
			      <p>
			      (タブ1の中身) <br>
					あいうえおかきくけこさしすせそたちつてと<br>
			      <?php 
			      	for($i = 0; $i <= 20; $i++){
						printf("　・　test[%02d] <br>", $i);
					}
			      ?>
			      </p>
			   </div>
			   <div id="tab2">
			      <p>
			      (タブ2の中身) <br>
			      <div class = "ImageArea">
			      	NO IMAGE
			      </div>
			      </p>
			   </div>
			</div>
			<script type="text/javascript"><!--
		  	 // デフォルトのタブを選択
		 	  ChangeTab('tab1');
			// --></script>

	</div>
	

</body>
<footer>
	<div style="position:static; bottom:0px; right:0px; width: 100%; height:10%; background-color:#78BCFF;">

		<div id="bucket" class="drop">
        	<p>
        	ゴミ箱 <br>
        	消したいものはここへドラック
        	</p>
   		</div>	
		
		<ul id="list" class="sortable_li">
	    <li id="test-1" class="dropme">One</li>
	    <li id="test-2" class="dropme">Two</li>
	    <li id="test-3" class="dropme">Three</li>
	    <li id="test-4" class="dropme">Four</li>
	    </ul>
	    
   		<script>
        $("#list").sortable({
        containment : 'document',
        cursor : 'move',
        items: 'li',
        stop: function(event, ui) { 
            if (deleteMe) {
                        ui.item.remove();
                        deleteMe = false;
                    }
       		}
	    });   
	    $('#bucket').droppable({
	        drop: function(event, ui) {
	            deleteMe = true; 
	        },
	        accept: '.dropme'
	    });
	    </script>

	</div>
</footer>

</html>