<?php
class MapController extends AppController {
	public $name = 'Map';
	public $uses = null;
	// public $autoLayout;
	// public $autoRender;
	public $layout = "Map";
	// public $helpers = array('GoogleMap'); // Adding the helper
	public function index() {
		// $this->autoLayout = true;
		// $this->autoRender = true;
		// $this->setAction("other");
		// $this->redirect("./other");
	}
	public function other() {
		// $this->autoLayout = false;
		// $this->autoRender = true;
	}
}
?>