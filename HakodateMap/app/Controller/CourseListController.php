<?php
App::uses ( 'AppController', 'Controller' );
class CourseListController extends AppController {
	
	// 検索結果のjson(デコード済み)を引数にそれを整理した配列を生成する
	function parse($obj) {
		$result = $keyList = $pushData = array ();
		$i = 0;
		
		// key名を取得
		foreach ( $obj ['head'] ['vars'] as $key ) {
			$keyList += array (
					$i => $key 
			);
			$i ++;
		}
		// 一件分ずつ検索結果を整理
		foreach ( $obj ['results'] ['bindings'] as $val ) {
			foreach ( $keyList as $keyName ) {
				$pushData += array (
						$keyName => $val [$keyName] ['value'] 
				);
			}
			array_push ( $result, $pushData );
			$pushData = array ();
		}
		return $result;
	}
	
	// 引数のurlに対して問い合わせを実行
	function runQuery($url) {
		if (! function_exists ( 'curl_init' )) {
			die ( 'CURL is not installed!' );
		}
		// Curlセッションを初期化
		$ch = curl_init ();
		// リクエストURLをセット
		curl_setopt ( $ch, CURLOPT_URL, $url );
		// 結果を文字列で取得
		curl_setopt ( $ch, CURLOPT_HTTPHEADER, array (
				"Accept: application/json" 
		) );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		// curlの実行
		$response = curl_exec ( $ch );
		curl_close ( $ch );
		
		return json_decode ( $response, true );
	}
	function courseNameAll() {
		$query = '
			PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>

SELECT ?courseName WHERE {
GRAPH <file:///var/lib/4store/machiaruki_akiba.rdf>{
 ?s rdfs:label ?courseName;
	}
	}';
		
		$url = 'http://lod.per.c.fun.ac.jp:8000/sparql/?query=' . urlencode ( $query ) . '&output=json';
		
		return $url;
	}
	
	//"画像を持った"スポットのあるコースをスポット名＋画像で取得する
	//画像を持たないコースは一切取得されないのでcourseNameAllと合わせて何とかされたし
	function courseImage() {
		$query = '
	PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
	PREFIX schema: <http://schema.org/>
	PREFIX dc: <http://purl.org/dc/elements/1.1/>
	
	SELECT DISTINCT ?courseName ?spotName ?image  WHERE {
		GRAPH <file:///var/lib/4store/machiaruki_akiba.rdf>{
		?s rdfs:label ?courseName;
		dc:relation ?mspotURI.
		?mspotURI schema:name ?spotName.
	
	}GRAPH <file:///var/lib/4store/hakobura_akiba.rdf> {
	?hspotName rdfs:label ?spotName;
	schema:image ?image.
	}
	}';
		
		$url = 'http://lod.per.c.fun.ac.jp:8000/sparql/?query=' . urlencode ( $query ) . '&output=json';
		
		return $url;
	}
	
	//全コース名とそのスポットのリストを取得する
	function courseSpotList() {
		$query = '
	PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
	PREFIX schema: <http://schema.org/>
	PREFIX dc: <http://purl.org/dc/elements/1.1/>
	
	SELECT DISTINCT ?courseName ?spotName ?image  WHERE {
		GRAPH <file:///var/lib/4store/machiaruki_akiba.rdf>{
		?s rdfs:label ?courseName;
		dc:relation ?mspotURI.
		?mspotURI schema:name ?spotName.
	
	}GRAPH <file:///var/lib/4store/hakobura_akiba.rdf> {
	?hspotName rdfs:label ?spotName;
	schema:image ?image.
	}
	}';
	
		$url = 'http://lod.per.c.fun.ac.jp:8000/sparql/?query=' . urlencode ( $query ) . '&output=json';
	
		return $url;
	}
	
	public $name = 'CourseList';
	public $uses = null;
	public $layout = "CourseList";
	public function index() {
		// $this -> autoRender = true;
		CourseListController::courselist();
	}
	
	public function home() {

	}
	public function about() {

	}
	public function courselist(){
		$obj=CourseListController::runQuery(CourseListController::courseNameAll());
		$courseNameList=(CourseListController::parse($obj));
		
		$obj=CourseListController::runQuery(CourseListController::courseImage());
		$courseImageList=(CourseListController::parse($obj));

		$courseList = $course = array();
		$flag = false;
		
		foreach($courseNameList as $name){
			$flag = false;
			foreach($courseImageList as $image){
				if(!strcmp($name['courseName'], $image['courseName'])){
					$course = array('courseName' => $name['courseName'], 'image' => $image['image']);
					$flag = true;
					break;
				}
			}
			if($flag == false){
				$course = array('courseName' => $name['courseName'], 'image' => "no image");
			}
			array_push($courseList, $course);
		}
		
		$this->set('courseList',$courseList);
	}
}