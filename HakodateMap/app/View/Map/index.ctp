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

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>sampleMap</title> 

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
 <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>

<script type="text/javascript">
function ChangeTab(tabname) {
   // 全部消す
   document.getElementById('tab1').style.display = 'none';
   document.getElementById('tab2').style.display = 'none';
   // 指定箇所のみ表示
   document.getElementById(tabname).style.display = 'block';
}
</script>

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
function select_category() {
	//MarkerArray.forEach(function (marker, idx) { marker.setMap(null); });
}

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
    var markerData = <?php echo $spotList_json; ?>;

    <?php if(isset($spotName)){ ?>
    var spotName = <?php echo $spotName; ?>;
    <?php } ?>

    var MarkerArray = new google.maps.MVCArray();
    for (i = 0;i < markerData.length;i++){
    	//受け取った配列から実際のマーカーを生成
    	<?php 
    	if(isset($spotName)){ 
		?>
			var name = markerData[i].spotName;
	    	if(name.indexOf(spotName) != -1){
		    	var marker = new google.maps.Marker({
		        	position: new google.maps.LatLng(markerData[i].lat, markerData[i].lng),
		        	title: markerData[i].spotName,
		        	visible: true
		    	});
		    	marker.setMap(map);
		    	MarkerArray.push(marker);
	    	}
	    <?php 
		}else{
	    ?>
		    var marker = new google.maps.Marker({
		       	position: new google.maps.LatLng(markerData[i].lat, markerData[i].lng),
		       	title: markerData[i].spotName,
		       	visible: true
		   	});
		    marker.setMap(map);
	    	MarkerArray.push(marker);
	    <?php 
		}
	    ?>
	}
}
</script>
</head>

<body onload="initialize()">
<div id="map" style="width:100%; height:90%"></div>
	
	
	<form name="category" action="">
		<div class="cake.web effect1" style="position:absolute; right:20px; top:10px;　min-width:300px">
			<div class="cb" style="background:#fa8072; border-bottom:2px solid #e55444;"><input type="checkbox" name="cat1" value="category1" onclick="select_category()">イベント</div>
			<div class="cb" style="background:#f9cc72; border-bottom:2px solid #e59900;"><input type="checkbox" name="cat2" value="category2" onclick="select_category()">食べる</div>
			<div class="cb" style="background:#89f972; border-bottom:2px solid #35b235;"><input type="checkbox" name="cat3" value="category3" onclick="select_category()">見る</div>
			<div class="cb" style="background:#72e3f9; border-bottom:2px solid #359db2;"><input type="checkbox" name="cat4" value="category4" onclick="select_category()">遊ぶ</div>
			<div class="cb" style="background:#95a6f9; border-bottom:2px solid #3574b2;"><input type="checkbox" name="cat5" value="category5" onclick="select_category()">買う</div>
			<div class="cb" style="background:#f9aef9; border-bottom:2px solid #e544e5;"><input type="checkbox" name="cat6" value="category6" onclick="select_category()">温泉</div>
		</div>
	</form>

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
			      <?php 
			      foreach($spotList as $spot){
					echo("・".$spot['spotName']."<br>");
					}
			      ?>
			      <br>
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
	    <li id="test-1" class="dropme">元町観光案内所</li>
	    <li id="test-2" class="dropme">元町公園</li>
	    <li id="test-3" class="dropme">旧イギリス領事館</li>
	    <li id="test-4" class="dropme">ペリー提督来航記念碑</li>
	    </ul>
	    
	    <!-- addlist('引数')でlistに出力 -->
	    <!-- <div class="btn" onClick="addlist('テストです。')">Sample Add</div> -->

	</div>
</footer>

</html>
