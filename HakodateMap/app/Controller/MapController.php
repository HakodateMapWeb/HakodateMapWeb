<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<?php
class MapController extends AppController {
	public $name = 'Map';
	public $uses = null;
	//public $autoLayout;
	//public $autoRender;
	public $layout = "Map";
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
	}
	public function other() {
		// $this->autoLayout = false;
		// $this->autoRender = true;
	}
}
?>