<?php

use NDC\Behavior\Observer\Consumer\BillComponent;
use NDC\Behavior\Observer\Consumer\CartComponent;
use NDC\Behavior\Observer\Provider;

class ObserverTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $provider = new Provider();
        $cart = new CartComponent();
        $bill = new BillComponent();

        $provider->attach($cart);
        $provider->attach($bill);

        $provider->login('dacchien.ndc');
        $provider->addProduct([
            'name' => 'T-shirt',
            'price' => 100
        ]);
        
        $this->assertEquals($cart->data, 1);
        $this->assertEquals($bill->name, 'dacchien.ndc');

        $provider->dettach($bill);
        $provider->login('dacchien');
        $this->assertNotEquals($bill->name, 'dacchien');
    }
}