<?php

class RestaurantBill {
    private $owner;

    public function __construct($name) {
        $this->owner = $name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function calculateTotal() {
        $bill = [1,2,3];
        return Orders::calculate($bill);

    }
}