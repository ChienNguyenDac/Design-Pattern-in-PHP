<?php

use NDC\Creational\Singleton\Todos;

class SingletonTest extends \Codeception\Test\Unit
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
        $todo1 = Todos::getInstance();
        $todo1->setTodos(array('learn PHP', 'learn Node'));
        $this->assertEquals(count($todo1->getTodos()),2);
        
        $todo2 = Todos::getInstance();
        $todo2->addItem('learn English');
        $this->assertEquals(count($todo1->getTodos()), count($todo2->getTodos()));
    }
}