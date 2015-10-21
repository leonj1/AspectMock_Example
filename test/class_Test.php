<?php

require_once("../src/app_autoload.php");

use AspectMock\Test as test;

class class_Test extends PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        test::clean(); // remove all registered test doubles
    }

    function testGetOwner() {
        $restaurant = new RestaurantBill('clown');
        $this->assertEquals('clown', $restaurant->getOwner());
    }

    function testWithoutOverride() {
        $restaurant = new RestaurantBill('clown');
        $total = $restaurant->calculateTotal();
        
        $this->assertEquals(6, $total);
    }

    function testOverrideStatic() {
        $user = test::double('Orders', ['calculate' => '1']);

        $restaurant = new RestaurantBill('clown');
        $total = $restaurant->calculateTotal();

        $this->assertEquals(1, $total);

    }

    function testUserCreate() {
        $userProxy = test::double('User', ['save' => function(){
            echo "MOCKED User->save() called\n";
        }]);
        $service = new UserService;
        $user = $service->createUserByName('Zachary');

        $this->assertEquals('Zachary', $user->getName());
        $userProxy->verifyInvoked('save');
    }
}
