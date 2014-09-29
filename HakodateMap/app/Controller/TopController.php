<?php
App::uses('AppController', 'Controller');
 
class TopController extends AppController {
 
    public function index() {
        $this -> autoLayout = false;
    }
}