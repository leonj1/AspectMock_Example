<?php

spl_autoload_register(null, false);
spl_autoload_extensions('.php');
spl_autoload_register(function($class){
    include __DIR__."/".$class.".php";
});