<?php

App::uses('AppController', 'Controller');

class ThingsController extends AppController {
    
//public $uses = array('Thing');


    public function index() {
        $this->redirect(array('controller' => 'pages', 'action' => 'home'));
    }
    
    public function menu() {
        $this->layout = 'things';

        $this->loadModel('Pizza');
        $pizzas = $this->Pizza->find('all');
        $this->set('pizzas', $pizzas); 

        $this->loadModel('CartItem');
        $counter = $this->CartItem->find('count');
        $this->set('counter', $counter);

        //dzia�a ale to jest do poprawki
        //$mealsInCart = $this->CartItem->find('all');
        //$this->set('mealsInCart', $mealsInCart); 
        $mealsInCart = $this->beforeFilter('array');
        $this->set('mealsInCart', $mealsInCart); 
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

//        $this->layout = 'admin';
    } 
   
    public function addToBoxSession() {
            $this->autoRender = false;
           if ($this->request->is('post')) {
                    $id = $this->request->data['Thing']['product_id'];
                    $name = $this->request->data['Thing']['item_name'];
                    $price = $this->request->data['Thing']['price'];
                    $size = $this->request->data['Thing']['size'];
                    $this->Thing->addProduct($id);
                    $putItemInSession = $this->Thing->putItemInSession($id, $name, $price, $size);
            } 

            $getCount = $this->Thing->getCount();
            $arrayPizza = array("counter" => $getCount, "id" => $id, "name" => $name, "price" => $price, "size" => $size, "whetherItemInCart" => $putItemInSession);
            return json_encode($arrayPizza);
    }
      
    public function clearSession() {
    $this->autoRender = false;
    $this->Thing->clearSessionInModel();
    $this->redirect('menu');
    }
    

    public function incrementController($id, $price, $size) {
        $this->autoRender = false;
        $valueAfterIncrement = $this->Thing->increment($id, $size);
        $this->Thing->addProduct($id);
        $count = $this->Thing->getCount();
        
        return json_encode(array("amount" => $valueAfterIncrement, "count" => $count, "price" => $price ));
    }
            
    public function decrementController($id, $price, $size) {
        $this->autoRender = false;
        $valueAfterDecrement = $this->Thing->decrement($id, $size);
        $this->Thing->subtractProduct($id);
        $count = $this->Thing->getCount();
        if($valueAfterDecrement === 0 ){$this->removeInController($id, $size);}
        
        return json_encode(array("amount" => $valueAfterDecrement, "count" => $count, "price" => $price ));
    }
    
    public function readUpdatedArrayFromSession($id, $size){
    $this->autoRender = false;
    $updatedArray = $this->Thing->readArray();
    $itemsAmountInCart = count($updatedArray);


        for ($i=0; $i<$itemsAmountInCart; $i++) {
            $itemExistInCart = in_array($id, array($updatedArray[$i]['id']));
            $sizeMatch = in_array($size, array($updatedArray[$i]['size']));
            if ($itemExistInCart && $sizeMatch){
                return json_encode(array("amount" => $updatedArray[$i]['amount'], "price" => $updatedArray[$i]['price']));
            } else {
                //do nothing
            }
        }
    }
        
    public function removeInController($id, $size){
        $this->autoRender = false;
        $this->Thing->removeRecordFromArray($id, $size);
        $this->Thing->sortById($this->Thing->readArray());
    }
        
    public function total() {
        $this->autoRender = false;
        return json_encode(number_format($this->Thing->countTotatalOrderPrice(),2));
    }
}
