<?php
App::uses('AppController', 'Controller');
 
class WebController extends AppController {
 	public $name='Web';
 	public $uses=null;
 	public $layout="Web";
 	
    public function index() {
        //$this -> autoLayout = false;
        //$this -> autoRender = true;
        //echo "え";
    }
    
    public function other() {
    	//$this -> autoLayout = false;
    	//$this -> autoRender = true;
    	//echo "え";
    }
}