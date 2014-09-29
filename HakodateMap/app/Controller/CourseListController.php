<?php
App::uses('AppController', 'Controller');
 
class CourseListController extends AppController {
 
    public function index() {
        $this -> autoLayout = false;
        $this -> autoRender = true;
        // echo "え";
    }
}