<?php

function controller_autoload($classname){
    include 'contollers/' . $classname. 'php';

}

spl_autoload_register('controller_autoload');