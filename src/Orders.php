<?php

class Orders {
    public static function calculate($bill) {
        $total = 0;
        foreach($bill as $item) {
            $total += $item;
        }
        return $total;
    }
}
