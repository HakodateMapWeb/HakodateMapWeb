<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>

<?php echo $this->Html->script('jquery.cookie.js'); ?>

<?php

if(isset($spotList[0])){
	$lat = $spotList['0']['lat'];
	$lng = $spotList['0']['lng'];
}else{
	$lat = 41.773922;
	$lng = 140.726426;
}

/*
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
		'longitude' => $lng,
		// 'address' => '',
		'marker' => false,
);
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>sampleMap</title> 

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
 <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>

<script type="text/javascript"><!--
function ChangeTab(tabname) {
   // 全部消す
   document.getElementById('tab1').style.display = 'none';
   document.getElementById('tab2').style.display = 'none';
   // 指定箇所のみ表示
   document.getElementById(tabname).style.display = 'block';
}
// --></script>

<script type="text/javascript"><!--
//ここでlistに要素を追加
function addlist(sample) {
	$("#list").append('<li id="TEST" class="dropme">'+sample+'</li>');
    $("#list").sortable('refresh');
}
// --></script>

<script>
<!--
// Sortableのメインです
jQuery( function() {
	jQuery( '#list' ) . sortable();
    jQuery( '#list' ) . disableSelection();
	jQuery('#list').sortable({
       	containment : 'document',
        cursor : 'move',
        opacity: 0.7,
        items: 'li',
        stop: function(event, ui) {
            if (deleteMe) {
                        ui.item.remove();
                        deleteMe = false;
                    }
       		}
    	    });
       
	 jQuery('#bucket').droppable({
	        drop: function(event, ui) {
	            deleteMe = true; 
	        },
	        accept: '.dropme'
	    });
} );
// -->
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  //マップの諸々の設定やピンの配置など
  function initialize() {
	//マップ自体の設定
    var latlng = new google.maps.LatLng(41.773922, 140.726426);
    var myOptions = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), myOptions);

    //phpからjsへ$spotListの受け渡し
    <?php $spotList_json = json_encode($spotList);?>
    var markerData = '<?php $spotList_json; ?>';
    
    for (i = 0;i < markerData.length;i++)
    	//受け取った配列から実際のマーカーを生成
    	var marker = new google.maps.Marker({  
       	 	position: new google.maps.LatLng(markerData[i].lat, markerData[i].lng),  
        	title: markerData[i].name
    	});
    
    	//生成したマーカーを地図に表示
    	marker.setMap(map);
  	}


    /*
	foreach($spotList as $spot){
		$marker = array(
		'windowText' => $spot['spotName'],
    	'markerTitle' => $spot['spotName'],
   		'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
  		);
		echo $this->GoogleMap->addMarker('hakodate', $i, array('latitude' => $spot['lat'], 'longitude' => $spot['lng']), $marker_options);
		$i++;
	}
	*/
  }
</script>

</head>
<body onload="initialize()">
<div id="map" style="width:100%; height:90%"></div>
<?php print_r($spotList_json);?>
	<?php //echo $this->GoogleMap->map($map_options); ?>
	<?php /*$i = 0;
	foreach($spotList as $spot){
		$marker_options = array(
    	'showWindow' => true,
		'windowText' => $spot['spotName'],
    	'markerTitle' => $spot['spotName'],
   		'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
  		);
		echo $this->GoogleMap->addMarker('hakodate', $i, array('latitude' => $spot['lat'], 'longitude' => $spot['lng']), $marker_options);
		$i++;
	} */?>
	
	
	<div class="cake.web effect1" style="position:absolute; right:20px; top:10px;　min-width:300px">
		<div class="cb" style="background:#fa8072; border-bottom:2px solid #e55444;"><input type="checkbox" name="" value="test1">イベント</div>
		<div class="cb" style="background:#f9cc72; border-bottom:2px solid #e59900;"><input type="checkbox" name="" value="test2">食べる</div>
		<div class="cb" style="background:#89f972; border-bottom:2px solid #35b235;"><input type="checkbox" name="" value="test3">見る</div>
		<div class="cb" style="background:#72e3f9; border-bottom:2px solid #359db2;"><input type="checkbox" name="" value="test4">遊ぶ</div>
		<div class="cb" style="background:#95a6f9; border-bottom:2px solid #3574b2;"><input type="checkbox" name="" value="test5">買う</div>
		<div class="cb" style="background:#f9aef9; border-bottom:2px solid #e544e5;"><input type="checkbox" name="" value="test6">温泉</div>
	</div>

	<div class="cake.web effect1" style="position:absolute; right:20px; top:50px; width: 200px; height:20px background-color:rgba(255, 255, 255, 1);">
			<div class="tabbox">
			    <a href="#tab1" class="tab1" onclick="ChangeTab('tab1'); return false;">タブ1</a>
			    <a href="#tab2" class="tab2" onclick="ChangeTab('tab2'); return false;">タブ2</a>
			</div>

	</div>
	<div class="cake.web effect2" style="position:absolute; right:20px; top:90px; width: 200px; height:65%; background-color:rgba(255, 255, 255, 1);">
			<div class="tabbox">
			   <div id="tab1">
			      <p>
			      (タブ1の中身) <br>
					あいうえおかきくけこさしすせそたちつてと<br>
			      <?php 
						print_r($spotList);
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
        	ここへドラック
        	</p>
   		</div>	
		
		<ul id="list" class="sortable_li">
	    <li id="test-1" class="dropme">One</li>
	    <li id="test-2" class="dropme">Two</li>
	    <li id="test-3" class="dropme">Three</li>
	    <li id="test-4" class="dropme">Four</li>
	    </ul>
	    
	    <!-- addlist('引数')でlistに出力 -->
	    <div class="btn" onClick="addlist('テストです。')">Sample Add</div>

	</div>
</footer>

</html>
