<?php

App::uses('AppController', 'Controller');

class ThingsController extends AppController {


    public function index() {
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
    }
    
    public function menu() {
        $this->layout = 'things';
        $this->loadModel('Pizza');
        $pizzas = $this->Pizza->find('all');
        $this->set('pizzas', $pizzas);      
    }
    public function discount() {
        $this->layout = 'things';
    }
    
    public function delivery() {
        $this->layout = 'things';
    }
    
    public function contact() {
        $this->layout = 'things';
    }
    
    public function gallery() {

    }
    public function allergens() {
        $this->layout = 'admin';
    }
    
    public function box() {
        $this->layout = 'things';
    }
    
    public function ajax_do_sth(){}
}
