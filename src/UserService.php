<?php

class UserService {
    function createUserByName($name) {
        echo "UserService->createUserByName() called\n";

        $user = new User();
        $user->setName($name);
        $user->save();

        return $user;
    }
}