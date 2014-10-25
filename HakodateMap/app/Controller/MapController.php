<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<?php
class MapController extends AppController {
	public $name = 'Map';
	public $uses = null;
	//public $autoLayout;
	//public $autoRender;
	public $layout = "Web";
	// public $helpers = array('GoogleMap'); // Adding the helper
	
	public function index() {
		// $this->autoLayout = true;
		//$this->autoRender = true;
		// $this->setAction("other");
		// $this->redirect("./other");
		 echo "<html><head></head><body>";
		 echo "<p></p>";
		 echo "</body></html>";
		//$this->set("title_for_layout","Index Page");
		//spotNameの存在を確認しないとWarningが出るので2回if文を書いてます
		if(isset($this->data['spotName']))if($this->data['spotName'] != ""){
			if($this->data['category'] == '0'){
				$url = MapController::spotQuery($this->data['spotName']);
			}else{
				$url = MapController::spotCategoryQuery($this->data['spotName'], $this->data['category']);
			}
			$searchResult = MapController::runQuery($url);
			$spotList = array();
			$spotList = MapController::parse($searchResult);
			$this->set('spotList',$spotList);
		}
	}
	
	public function other() {
		// $this->autoLayout = false;
		// $this->autoRender = true;
	}
	
	//検索結果のjson(デコード済み)を引数にそれを整理した配列を生成する
	function parse($obj){
		$result = $keyList = $pushData = array();
		$i = 0;
	
		//key名を取得
		foreach($obj['head']['vars'] as $key){
			$keyList += array($i => $key);
			$i++;
		}
		//一件分ずつ検索結果を整理
		foreach($obj['results']['bindings'] as $val){
			foreach($keyList as $keyName){
				$pushData += array($keyName => $val[$keyName]['value']);
			}
			array_push($result, $pushData);
			$pushData = array();
		}
		return $result;
	}
	
	//引数のurlに対して問い合わせを実行
	function runQuery($url){
		if (!function_exists('curl_init')){
			die('CURL is not installed!');
		}
		// Curlセッションを初期化
		$ch= curl_init();
		// リクエストURLをセット
		curl_setopt($ch, CURLOPT_URL, $url);
		// 結果を文字列で取得
		curl_setopt($ch, CURLOPT_HTTPHEADER,array("Accept: application/json"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER ,true);
		// curlの実行
		$response = curl_exec($ch);
		curl_close($ch);
	
		return json_decode($response, true);
	}
	
	//スポット名をキーとしてスポット名を部分一致で検索するためのurlを生成
	function spotQuery($spotName){
		$query = "
				PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
				PREFIX geo: <http://www.w3.org/2003/01/geo/wgs84_pos#>
	
				SELECT DISTINCT ?spotName ?lat ?long ?category
	
				FROM <file:///var/lib/4store/hakobura_akiba.rdf>
	
				WHERE {
  					GRAPH <file:///var/lib/4store/hakobura_akiba.rdf> {
   						?hs rdfs:label ?spotName;
    					geo:lat ?lat;
    					geo:long ?long;
						rdfs:comment ?category;
    					FILTER regex (?spotName,\"".$spotName."\",\"i\").
 						}
				}";
	
		$url = 'http://lod.per.c.fun.ac.jp:8000/sparql/?query='.
				urlencode($query).'&output=json';
	
		return $url;
	}
	
	//スポット名とカテゴリをキーとしてスポット名を部分一致で検索するためのurlを生成
	function spotCategoryQuery($spotName, $category){
		$query = "
				PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
				PREFIX geo: <http://www.w3.org/2003/01/geo/wgs84_pos#>
	
				SELECT DISTINCT ?spotName ?lat ?long ?category
	
				FROM <file:///var/lib/4store/hakobura_akiba.rdf>
	
				WHERE {
  					GRAPH <file:///var/lib/4store/hakobura_akiba.rdf> {
   						?hs rdfs:label ?spotName;
    					geo:lat ?lat;
    					geo:long ?long;
						rdfs:comment ?category;
    					FILTER regex (?spotName,\"".$spotName."\",\"i\")
						FILTER regex (?category,\"".$category."\",\"i\").
 						}
				}";
	
		$url = 'http://lod.per.c.fun.ac.jp:8000/sparql/?query='.
				urlencode($query).'&output=json';
		
		return $url;
	}
}
?>