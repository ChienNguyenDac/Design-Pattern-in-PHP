<?php

namespace NDC\Behavior\Observer;
use NDC\Behavior\Observer\InterfaceSubject;

class Provider implements InterfaceSubject{
    private $state;
    private $storage;   //  contain all observer

    public function __construct()
    {
        $this->state = array(
            'products' => [],
            'account' => ''
        );
        $this->storage = array();
    }

    public function attach(InterfaceObserver $observer)
    {
        // array_push($this->storage, $observer);  
        $this->storage[] = $observer;  
    }

    public function dettach(InterfaceObserver $observer)
    {
        foreach($this->storage as $key => $val){
            if($val == $observer)
                unset($this->storage[$key]);
        }
    }

    public function render()
    {
        foreach($this->storage as $observer){
            $observer->update($this->state);
        }
    }

    public function addProduct($product){
        // array_push($this->state['products'], $product);
        $this->state['products'][] = $product;
        $this->render();
    }

    public function login($username){
        $this->state['account'] = $username;
        $this->render();
    }

    public function clearState(){
        $this->state = array(
            'products' => [],
            'account' => NULL
        );
        $this->render();
    }
}